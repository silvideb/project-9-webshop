<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CouponController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cart', function (Request $request) {
    $cart = session()->get('cart', []);
    return view('cart', compact('cart'));
});
Route::get('/coupons', [CouponController::class, 'index'])->name('coupons.index');
    Route::get('/coupons/create', [CouponController::class, 'create'])->name('coupons.create');
    Route::post('/coupons', [CouponController::class, 'store'])->name('coupons.store');
    Route::resource('coupons', CouponController::class);
