<?php

use Illuminate\Support\Facades\Route;
Route::middleware([\App\Http\Middleware\CheckLoginMiddleware::class])->group(function () {
    Route::get('/', \App\Livewire\Home::class)->name('home');
    Route::get('/category',\App\Livewire\CreateCategory::class)->name('category');
    Route::get('/product', \App\Livewire\CreateProduct::class)->name('product');
    Route::get('/cart', \App\Livewire\Cart::class)->name('cart');
    Route::get('/payment', \App\Livewire\PaymentSuccess::class)->name('payment');
});

Route::get('/login', \App\Livewire\Login::class)->name('login');
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');
