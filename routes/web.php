<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\RoleController;
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

Route::get('/products/index', [productcontroller::class, 'index'])->name('index');
Route::get('/add-product-to-cart/{id}', [CartController::class, 'create'])->name('add-product-to-cart');


//roles
Route::get('/roles/index', [RoleController::class, 'index'])->name('roles.index');
Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
Route::post('/roles/store', [RoleController::class, 'store'])->name('roles.store');
Route::get('/roles/edit/{id}', [RoleController::class, 'edit'])->name('roles.edit');
Route::post('/roles/update/{id}', [RoleController::class, 'update'])->name('roles.update');
Route::get('/roles/delete/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');
