<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::match(['GET', 'POST'], '/', [ProductController::class, 'index'])
    ->name('home');

Route::match(['GET', 'POST'], '/category', [ProductController::class, 'category'])
    ->name('category');

Route::match(['GET', 'POST'], '/register', [ClientController::class, 'register'])
    ->name('register');
    

