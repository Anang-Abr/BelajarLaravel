<?php

use App\Http\Controllers\BookInfoController;
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
Route::get('/Home', [BookInfoController::class, 'index']);
Route::get('/Home/{BookInfo}', [BookInfoController::class, 'info']);
Route::get('/About', [BookInfoController::class, 'about']);


