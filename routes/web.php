<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware(['verify.shopify'])->name('home');

Route::get('/shop', function () {
    return view('shop');
})->middleware(['verify.shopify'])->name('shop');


Route::get('/products', function () {
    return view('products');
})->middleware(['verify.shopify'])->name('products');

