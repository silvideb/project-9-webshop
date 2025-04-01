<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cart', function (Request $request) {
    $cart = session()->get('cart', []);
    return view('cart', compact('cart'));
});

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

//users
Route::get('/users/index', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::post('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users/{id}', function ($id) {
    $user = User::find($id);
    return view('users.show', compact('user'));
})->name('users.show');
