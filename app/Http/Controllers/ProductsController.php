<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{

    public function show_all_products()
    {
        return view('pages.shop');
    }

    public function show_single_product(string $id)
    {
        return view('pages.single-product');
    }
}
