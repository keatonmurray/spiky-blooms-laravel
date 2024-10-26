<?php

namespace App\Http\Controllers;
use App\Models\FeaturedProduct;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $getProducts = FeaturedProduct::take(4)->get();

        $data = [
            'title' => "Bringing Life",
            'subtitle' => "To Your Space",
            'products' => $getProducts
        ];

        return view('home.index')->with($data);
    }

    public function show(string $id)
    {
        $getSingleProduct = FeaturedProduct::find($id);
        return view('home.show')->with('product', $getSingleProduct);
    }
}
