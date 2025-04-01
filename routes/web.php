<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::name("products.")->prefix("products")->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
    Route::post('/update/{product}', [ProductController::class, 'update'])->name('update');
    Route::delete('/delete/{product}', [ProductController::class, 'destroy'])->name('destroy');
});

Route::name("categories.")->prefix("categories")->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/', [CategoryController::class, 'store'])->name('store');
    Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('edit');
    Route::post('/update/{category}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/delete/{category}', [CategoryController::class, 'destroy'])->name('destroy');
});

