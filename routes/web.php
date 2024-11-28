<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');

Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');


Route::get('/review/create/{product}', [ReviewController::class, 'create'])->name('review.create');
Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');