<?php

use App\Http\Controllers\UserController;
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

Route::get('/login', [UserController::class, 'loginIndex'])->name('loginIndex');

Route::get('/register', [UserController::class, 'registerIndex'])->name('registerIndex');
Route::post('/register',[UserController::class, 'register'])->name('register');

Route::get('/profile', [UserController::class, 'showProfile']);
