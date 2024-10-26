<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/show/{id}', [HomeController::class, 'show'])->name('collection');

Route::get('/collections', [ProductsController::class, 'index'])->name('collections');
Route::get('collection/{id}', [ProductsController::class, 'show'])->name('collection');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/payment', [CartController::class, 'payment'])->name('paypal.pay');
Route::get('success', [CartController::class, 'success'])->name('paypal.success');
Route::get('cancel', [CartController::class, 'cancel'])->name('paypal.cancel');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'create'])->name('register');
