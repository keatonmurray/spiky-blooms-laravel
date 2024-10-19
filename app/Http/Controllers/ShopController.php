<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{

    public function index()
    {
        $getAllProducts = Shop::all();

        $data = [
            'heading' => 'Hello, plant lovers.',
            'products' => $getAllProducts
        ];
        return view('pages.shop')->with($data);
    }

    public function show(string $id)
    {
        $getSingleCatalog = Shop::find($id);
        return view('pages.single-shop-product')->with('product', $getSingleCatalog);
    }
}
