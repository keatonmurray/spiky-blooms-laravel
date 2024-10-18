<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AccountController;

/********** HOME CONTROLLER **********/
Route::get('/', [HomeController::class, 'index']);

/********** ACCOUNT CONTROLLER **********/
Route::get('/login', [AccountController::class, 'login']);
Route::get('/register', [AccountController::class, 'register']);

/********** PRODUCTS CONTROLLER **********/
Route::get('/shop', [ProductsController::class, 'index']);
Route::get('/product/{id}', [ProductsController::class, 'show']);