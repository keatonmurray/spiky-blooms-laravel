<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{

    public function index()
    {
        $getAllProducts = Product::all();

        $data = [
            'heading' => 'Hello, plant lovers.',
            'products' => $getAllProducts
        ];
        return view('pages.shop')->with($data);
    }

    public function show(string $id)
    {
        $getSingleCatalog = Product::find($id);
        return view('pages.single-shop-product')->with('product', $getSingleCatalog);
    }
}
