<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $data = [
            'heading' => 'Hello, plant lovers.',
            'products' => Product::all()
        ];

       return view('products.index')->with($data);
    }

    public function show(string $id)
    {
        $getSingleCollection = Product::find($id);
        return view('products.show')->with('product', $getSingleCollection);
    }
}
