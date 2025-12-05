<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// List Products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Add Product Form
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Store Product
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
