<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HistoryController;
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
Route::post('/login', [UserController::class, 'login'])->name('loginSubmit');

Route::get('/register', [UserController::class, 'registerIndex'])->name('registerIndex');
Route::post('/register',[UserController::class, 'register'])->name('register');

// Route::get('/profile', [UserController::class, 'showProfile'])->name('showProfile');
Route::post('/profile', [UserController::class, 'logout'])->name('logout');

Route::get('/eventdetail/{eventId}', [EventController::class, 'showDetails'])->name('details');
Route::post('/registerevent/{eventId}', [HistoryController::class, 'regist'])->name('register.event');

// Route::get('/homepage', [EventController::class, 'homepageData'])->name('homepage');
Route::get('/events/search', [EventController::class, 'search'])->name('events.search');
Route::get('/', [EventController::class, 'displayWelcome'])->name('welcome');

// Route::get('/history', [HistoryController::class, 'showHistory'])->name('showHistory');
// Route::get('/favourite', [UserController::class, 'favouriteIndex'])->name('favouriteIndex');
// Route::get('/notification', [UserController::class, 'notificationIndex'])->name('notificationIndex');

// Define routes that require authentication
Route::group(['middleware' => 'auth'], function () {
    Route::get('/homepage', [EventController::class, 'homepageData'])->name('homepage');

    Route::get('/history', [HistoryController::class, 'showHistory'])->name('showHistory');
    Route::get('/favourite', [UserController::class, 'favouriteIndex'])->name('favouriteIndex');
    Route::get('/notification', [UserController::class, 'notificationIndex'])->name('notificationIndex');
    Route::get('/profile', [UserController::class, 'showProfile'])->name('showProfile');

    Route::get('/eventdetail/{eventId}', [EventController::class, 'showDetails'])->name('details');
    Route::post('/registerevent/{eventId}', [HistoryController::class, 'regist'])->name('register.event');
});

