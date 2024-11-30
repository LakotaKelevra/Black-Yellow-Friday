<?php

use App\Http\Controllers\BuyerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// CRUD OFFERTE
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');
Route::delete('/product/destroy/{product}', [ProductController::class, 'destroy'])->name('product.delete')->middleware('auth');

// CRUD RECENSIONI
Route::get('/review/create/{product}', [ReviewController::class, 'create'])->name('review.create')->middleware('auth');
Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store')->middleware('auth');
Route::delete('/review/destroy/{review}', [ReviewController::class, 'destroy'])->name('review.delete')->middleware('auth');

// INDEX ECENSIONI PER UTENTE
Route::get('user/{user}', [PublicController::class, 'user'])->name('user.show');

// DASHBOARD E CARRELLO
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/cart', [BuyerController::class, 'cart'])->name('cart')->middleware('auth');
Route::post('/buy/{product}', [BuyerController::class, 'buy'])->name('buy')->middleware('auth');
Route::delete('/remove/{product}', [BuyerController::class, 'removeFromCart'])->name('removeFromCart')->middleware('auth');