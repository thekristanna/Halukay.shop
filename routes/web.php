<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

//PUBLIC
Route::get('/shop', [ProductController::class, 'show_all_products']);

Route::get('/signup', [UserController::class, 'signup_show']);
Route::post('/signup', [UserController::class, 'signup']);

Route::get('/', function () {
    return view('welcome');
});
