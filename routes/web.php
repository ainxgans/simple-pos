<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('/category',\App\Livewire\CreateCategory::class)->name('category');
Route::get('/product', \App\Livewire\CreateProduct::class)->name('product');
Route::get('/cart', \App\Livewire\Cart::class)->name('cart');
Route::get('/login', \App\Livewire\Login::class);
