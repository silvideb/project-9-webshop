<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Cart Routes
Route::resource('cart', CartController::class)->only(['index', 'store', 'destroy']);
Route::put('/cart/update-item/{id}', [CartController::class, 'updateItem'])->name('cart.updateItem');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout.index');

// Coupon & Product Routes
Route::resource('coupons', CouponController::class);
Route::resource('products', ProductController::class);
Route::get('/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('products.addToCart');