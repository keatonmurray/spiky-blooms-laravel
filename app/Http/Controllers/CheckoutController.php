<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PaypalController;
use App\Models\Order;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('pages.cart');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email_address' => 'required',
            'phone_number' => 'required',
            'street_address' => 'required',
            'apt_num' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'country' => 'required'
        ]);

        Order::create($data);
        return redirect('/');
    }
}
