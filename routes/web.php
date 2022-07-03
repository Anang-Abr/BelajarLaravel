<?php

use App\Http\Controllers\BookInfoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;
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

Route::get('/', [BookInfoController::class, 'index']);
Route::get('/home', [BookInfoController::class, 'index']);
Route::get('/home/{BookInfo}', [BookInfoController::class, 'info']);
Route::get('/about', [BookInfoController::class, 'about']);


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'authenticate']);

Route::resource('/cart', CartController::class)->middleware('auth');
