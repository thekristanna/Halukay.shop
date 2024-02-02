<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/shop', [ProductController::class, 'show_all_products']);

Route::get('/signup', [UserController::class, 'signup_show']);



Route::get('/', function () {
    return view('welcome');
});
