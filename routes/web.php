<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/featured/{id}', [HomeController::class, 'show'])->name('featured');

Route::get('/collections', [ProductsController::class, 'index'])->name('collections');
Route::get('collection/{id}', [ProductsController::class, 'show'])->name('collection');

Route::post('/cart', [CartController::class, 'store'])->name('cart');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/payment', [CheckoutController::class, 'payment'])->name('paypal.pay');
Route::get('success', [CheckoutController::class, 'success'])->name('paypal.success');
Route::get('cancel', [CheckoutController::class, 'cancel'])->name('paypal.cancel');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'create'])->name('register');
Route::post('/store', [AuthController::class, 'store'])->name('create-user');
Route::get('show/{id}', [AuthController::class, 'show'])->name('account');
