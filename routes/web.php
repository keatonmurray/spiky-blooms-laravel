<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaypalController;

/********** HOME CONTROLLER **********/
Route::get('/', [HomeController::class, 'index']);
Route::get('/product/{id}', [HomeController::class, 'show']);

/********** ACCOUNT CONTROLLER **********/
Route::get('/login', [AccountController::class, 'login']);
Route::get('/register', [AccountController::class, 'register']);

/********** SHOP CONTROLLER **********/
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/shop/product/{id}', [ShopController::class, 'show']);

/********** CHECKOUT CONTROLLER **********/
Route::get('/cart', [CheckoutController::class, 'index']);
Route::get('/checkout/{id}', [CheckoutController::class, 'show']);

/********** PAYPAL CONTROLLER **********/
Route::post('/pay', [PaypalController::class, 'initPayment']);
Route::get('payment/success', [PaypalController::class, 'success'])->name('success');
Route::get('payment/cancel', [PaypalController::class, 'cancel'])->name('cancel');