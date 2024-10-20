<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('pages.cart');
    }

    public function show($id)
    {
        return view('pages.checkout');
    }
}
