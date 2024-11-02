<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'quantity'=> 'required|integer',
            'variation' => 'nullable|string'
        ]);

        Cart::create($data);
        return redirect(route('checkout'));
    }
}
