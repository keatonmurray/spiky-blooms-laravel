<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TotalOrder;
use App\Models\Cart;
use Illuminate\Support\Facades\Http;

class CheckoutController extends Controller
{
    private $apiEndpoint;
    private $apiClientId;
    private $apiClientSecret;

    public function __construct()
    {
        $this->apiEndpoint = env('PAYPAL_API_ENDPOINT');
        $this->apiClientId = env('PAYPAL_CLIENT_ID');
        $this->apiClientSecret = env('PAYPAL_CLIENT_SECRET');
    }

    public function index()
    {   
        $getCartItems = Cart::all();
        $fixedShippingFee = 7; //temporarily static
        $fixedVatFee = 1; //temporarily static
        $total = 0;
        $singleItemPrice = 0;
    
        foreach ($getCartItems as $item) {
            $total += $item->price * $item->quantity;
        }
        
        $subtotal = $total + $fixedShippingFee + $fixedVatFee;
    
        $data = [
            'items' => $getCartItems,
            'subtotal' => $subtotal,
            'total' => $total,
        ];
    
        return view('cart.index')->with($data);
    }
    

    public function payment(Request $request)
    {
        $formData = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'phone_number' => 'required|numeric',
            'order_total' => 'required|numeric'
        ]);

        session(['order_data' => $formData]);

        $amount = $request->input('order_total');

        $data = [
            'intent' => 'sale',
            'payer' => [
                'payment_method' => 'paypal',
            ],
            'transactions' => [
                [
                    'amount' => [
                        'total' => $amount,
                        'currency' => 'USD',
                    ],
                    'description' => 'Payment for order',
                ],
            ],
            'redirect_urls' => [
                'return_url' => route('paypal.success'),
                'cancel_url' => route('paypal.cancel'),
            ],
        ];

        try {
            $access_token = $this->getAccessToken();
            $response = Http::withToken($access_token)->post($this->apiEndpoint . '/v1/payments/payment', $data);

            if ($response->successful()) {
                $result = $response->json();
                foreach ($result['links'] as $link) {
                    if ($link['rel'] == 'approval_url') {
                        return redirect($link['href']);
                    }
                }
                return 'Error creating payment: Approval URL not found.';
            } else {
                return 'Error creating payment: Invalid response from PayPal.';
            }
        } catch (\Exception $e) {
            return 'Failed to get access token: ' . $e->getMessage();
        }
    }

    private function getAccessToken()
    {
        $storedToken = session('paypal_access_token');
        $expiresAt = session('paypal_token_expires_at');

        if ($storedToken && $expiresAt && time() < $expiresAt) {
            return $storedToken; 
        }

        $url = $this->apiEndpoint . '/v1/oauth2/token';
        $apiClientId = $this->apiClientId;
        $apiClientSecret = $this->apiClientSecret;

        $response = Http::withBasicAuth($apiClientId, $apiClientSecret)
            ->asForm()
            ->post($url, [
                'grant_type' => 'client_credentials',
            ]);

        if ($response->successful()) {
            $result = $response->json();
            
            if (isset($result['access_token'])) {
                session(['paypal_access_token' => $result['access_token']]);
                session(['paypal_token_expires_at' => time() + $result['expires_in'] - 60]); // Subtract 60 seconds as a buffer

                return $result['access_token'];
            } else {
                throw new Exception('Failed to retrieve access token.');
            }
        } else {
            throw new Exception('Error requesting access token: ' . $response->body());
        }
    }

    public function success(Request $request)
    {
        $payment_id = $request->get('paymentId');
        $payer_id = $request->get('PayerID');

        if ($payment_id && $payer_id) {
            $result = $this->executePayment($payment_id, $payer_id);

            if (isset($result['state']) && $result['state'] === 'approved') {
                $orderData = session('order_data');

                if ($orderData) {
                    TotalOrder::create($orderData);
                    session()->forget('order_data');
                }

                return redirect('/')->with('success', 'Payment successful!');
            }
        }
    }

    public function cancel()
    {
        session()->forget('order_data');
        return redirect('/');
    }

    private function executePayment($payment_id, $payer_id)
    {
        $access_token = $this->getAccessToken();
        $url = $this->apiEndpoint . '/v1/payments/payment/' . $payment_id . '/execute';

        $data = [
            'payer_id' => $payer_id,
        ];

        $response = Http::withToken($access_token)->post($url, $data);

        if ($response->successful()) {
            return $response->json();
        } else {
            throw new \Exception('Error executing payment: ' . $response->body());
        }
    }
}
