<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

//--------PUBLIC SIDE--------//
Route::get('/about', function () {
    return view('about');
}); //will create about page ye

Route::get('/', function () {
    return view('home');
}); //still in process

Route::get('/shop', [ProductController::class, 'show_all_products']);
Route::get('/shop/search', [ProductController::class, 'search_product']);
Route::get('/shop/{id}', [ProductController::class, 'show_product']);

Route::get('/redir_login/{id}', [ProductController::class, 'redirect_heart']);

Route::get('/signup', [UserController::class, 'signup_show']);
Route::post('/signup', [UserController::class, 'signup']);

Route::get('/login', [UserController::class, 'login_show']);
Route::post('/login', [UserController::class, 'login']);

Route::get('logout', [UserController::class, 'logout']);

//--------SHOPPER SIDE--------//
Route::middleware(['checkSessionShopper'])->group(function () {
    Route::get('/shopper/profile', [UserController::class, 'view_profile_shopper']);
    Route::get('/shopper/my_account', [UserController::class, 'my_acct_shopper_view']);
    Route::get('/shopper/my_account/edit', [UserController::class, 'my_acct_shopper_form']);
    Route::put('/shopper/my_account/edit', [UserController::class, 'my_acct_shopper_edit']);


    Route::post('/shopper/my_bag/{id}', [ProductController::class, 'add_to_bag']);
    Route::get('/shopper/my_bag', [ProductController::class, 'shopper_bag_view']);
    Route::get('/shopper/previous_orders', [OrderController::class, 'previous_order_view']); //will relocate in Order
    Route::get('/shopper/current_orders', [OrderController::class, 'current_order_view']);

    Route::delete('/shopper/products/unlike/{id}', [ProductController::class, 'shop_delete_like']);
    Route::get('/shopper/products/likes', [ProductController::class, 'likes_view']);
    Route::post('/shopper/products/likes/{product_id}/{seller_id}', [ProductController::class, 'add_like']);
    Route::delete('/shopper/products/likes/delete/{id}', [ProductController::class, 'delete_like']);


    Route::get('/shopper/notifications', [UserController::class, 'view_notifications_shopper']);
    Route::delete('/shopper/notifications/{id}', [UserController::class, 'delete_notification']);
    Route::put('/shopper/notifications/seen/{id}', [UserController::class, 'seen_notification']);
});


//--------SELLER SIDE--------//
Route::middleware(['checkSessionSeller'])->group(function () {
    Route::get('/seller/my_account', [UserController::class, 'my_acct_seller_view']);
    Route::get('/seller/my_account/edit', [UserController::class, 'my_acct_seller_form']);
    Route::put('/seller/my_account/edit', [UserController::class, 'my_acct_seller_edit']);

    Route::get('/seller/add_product', [ProductController::class, 'add_product_view']);
    Route::post('/seller/add_product', [ProductController::class, 'add_product']);
    Route::get('seller/edit/product/{id}', [ProductController::class, 'edit_product_form']);
    Route::put('seller/edit/product/{id}', [ProductController::class, 'edit_product']);
    Route::delete('/seller/delete/product/{id}', [ProductController::class, 'delete_product']);

    Route::get('/seller/my_shop', [ProductController::class, 'my_shop_view']);

    Route::get('/seller/notifications', [UserController::class, 'view_notifications']);
    Route::delete('/seller/notifications/{id}', [UserController::class, 'delete_notification']);
    Route::put('/seller/notifications/seen/{id}', [UserController::class, 'seen_notification']);

    Route::get('/seller/profile', [UserController::class, 'view_profile_seller']); //wala pa
    Route::get('/seller/previous_orders', [OrderController::class, 'seller_prev_order_view']);
    Route::get('/seller/current_orders', [OrderController::class, 'seller_current_order_view']);
});



// Route::get('/', function () {
//     return view('welcome');
// });
