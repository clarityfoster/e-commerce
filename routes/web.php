<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::get('/', [ProductController::class, 'index'])->name('name');
Route::get('/products', [ProductController::class, 'allProducts'])->name('allProducts');
Route::get('/products/detail/{id}', [ProductController::class, 'detail'])->name('detail');
Route::get('/products/category/{id}', [ProductController::class, 'category'])->name('category');
Route::get('/products/gender/{id}', [ProductController::class, 'gender'])->name('gender');
Route::get('/products/style/{id}', [ProductController::class, 'style'])->name('style');

Route::get('/profile', [ProfileController::class, 'account'])->name('account');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
