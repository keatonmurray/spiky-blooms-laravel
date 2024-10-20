<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class PaypalController extends Controller
{
    private $apiClient;
    private $clientId;
    private $clientSecret;

    public function __construct()
    {
        $this->apiClient = 'https://api-m.sandbox.paypal.com';
        $this->clientId = 'AXBJ1UhdFMpCrsgXQIyjx53lSRJtSgwDi0PVe0I37VPuSvGey-BuQLwwqTtZXtDzn__UMgHgM5RTaEeH';
        $this->clientSecret = 'EDajS-IF1hgKn80KQUjXC-GoPXldIJkfOUpZWTEHQvJy22K7v4WjpW_v-Mcb-TbQGAddm0vxKEpv3QL2';
    }

    public function initPayment(Request $request)
    {
        $data = [
            'intent' => 'sale',
            'payer' => [
                'payment_method' => 'paypal',
            ],
            'transactions' => [
                [
                    'amount' => [
                        'total' => 100,
                        'currency' => 'USD',
                    ],
                    'description' => 'Payment for order',
                ],
            ],
            'redirect_urls' => [
                'return_url' => route('success'),
                'cancel_url' => route('cancel'),
            ],
        ];

        try {
            $access_token = $this->getAccessToken();
            $response = Http::withToken($access_token)->post($this->apiClient . '/v1/payments/payment', $data);

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

        $url = $this->apiClient . '/v1/oauth2/token';
        $clientId = $this->clientId;
        $clientSecret = $this->clientSecret;

        $response = Http::withBasicAuth($clientId, $clientSecret)
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
                return redirect('/')->with('success', 'Payment successful!');
            }
            return 'Payment not approved.';
        }
        return 'Payment failed.';
    }

    public function cancel()
    {
        return 'Payment canceled!';
    }

    private function executePayment($payment_id, $payer_id)
    {
        $access_token = $this->getAccessToken();
        $url = $this->apiClient . '/v1/payments/payment/' . $payment_id . '/execute';

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
