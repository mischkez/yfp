<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/post/{post}', [App\Http\Controllers\HomeController::class, 'show'])->name('show_post');
Route::get('posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('create_post');
Route::post('posts', [App\Http\Controllers\PostController::class, 'store'])->name('store_post');

Route::get('/reports/with-most-comments', [App\Http\Controllers\ReportsController::class, 'withMostComments'])->name('reports.with_most_comments');
Route::get('/reports/with-most-premium-features', [App\Http\Controllers\ReportsController::class, 'withMostPremiumFeatures'])->name('reports.with_most_premium_features');

Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/create', [App\Http\Controllers\OrderController::class, 'create'])->name('orders.create');
