<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AccountController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [ProductsController::class, 'show_all_products']);
Route::get('/product/{id}', [ProductsController::class, 'show_single_product']);
Route::get('/login', [AccountController::class, 'login']);
Route::get('/register', [AccountController::class, 'register']);
