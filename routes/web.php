<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
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

Route::get('/', [IndexController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('post', [PostController::class, 'index']);

Route::get('/add', [PostController::class, 'add']);
Route::post('/add', [PostController::class, 'create']);

Route::get('/show', [PostController::class, 'show']);

Route::get('/del', [PostController::class, 'del']);
Route::post('/del', [PostController::class, 'remove']);