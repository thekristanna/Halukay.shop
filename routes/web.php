<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

//PUBLIC
Route::get('/about', function () {
    return view('about');
}); //will create about page ye

Route::get('/', function () {
    return view('home');
}); //still in process

Route::get('/shop', [ProductController::class, 'show_all_products']);
Route::get('/shop/{id}', [ProductController::class, 'show_product']);

Route::get('/signup', [UserController::class, 'signup_show']);
Route::post('/signup', [UserController::class, 'signup']);

Route::get('/login', [UserController::class, 'login_show']);
Route::post('/login', [UserController::class, 'login']);

Route::get('logout', [UserController::class, 'logout']);


Route::middleware(['checkSessionShopper'])->group(function () {
    // 
});
Route::middleware(['checkSessionSeller'])->group(function () {
    // 
});


// Route::get('/', function () {
//     return view('welcome');
// });
