<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

// Halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Products dengan prefix category
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage'])->name('category.food');
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth'])->name('category.beauty');
    Route::get('/home-care', [ProductController::class, 'homeCare'])->name('category.home');
    Route::get('/baby-kid', [ProductController::class, 'babyKid'])->name('category.baby');
});
// Halaman Daftar Kategori
Route::get('/categories', function () {
    return view('category');
})->name('category.index');

// Halaman User dengan parameter
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile'])->name('user.profile');

// Halaman Penjualan (POS)
Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');

