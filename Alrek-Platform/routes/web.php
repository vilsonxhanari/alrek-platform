<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', [PagesController::class,'index'])->name('home');
Route::get('/shop/{id}', [ProductController::class,'show'])->name('shop');
Route::get('/cart', [CartController::class,'cart'])->name('cart');
