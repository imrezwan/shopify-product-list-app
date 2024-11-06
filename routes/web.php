<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopifyController;

Route::get('/', function () {
    return view('welcome');
})->middleware(['verify.shopify'])->name('home');

Route::get('/shop', function () {
    return view('shop');
})->middleware(['verify.shopify'])->name('shop');


Route::get('/products', [ShopifyController::class, 'getAllProducts'])->middleware(['verify.shopify'])->name('products');

