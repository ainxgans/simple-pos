<?php

use App\Http\Middleware\CheckLoginMiddleware;
use App\Livewire\Cart;
use App\Livewire\CreateCategory;
use App\Livewire\CreateProduct;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\PaymentSuccess;
use Illuminate\Support\Facades\Route;
Route::middleware([CheckLoginMiddleware::class])->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/category', CreateCategory::class)->name('category');
    Route::get('/product', CreateProduct::class)->name('product');
    Route::get('/cart', Cart::class)->name('cart');
    Route::get('/payment', PaymentSuccess::class)->name('payment');
});

Route::get('/login', Login::class)->name('login');
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');
