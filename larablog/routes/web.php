<?php

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

Route::get('/reports/with-most-comments', [App\Http\Controllers\ReportsController::class, 'withMostComments'])->name('reports.with_most_comments');
Route::get('/reports/with-most-premium-features', [App\Http\Controllers\ReportsController::class, 'withMostPremiumFeatures'])->name('reports.with_most_premium_features');