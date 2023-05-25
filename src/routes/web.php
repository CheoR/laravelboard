<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoadController;
use App\Http\Controllers\UserController;

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

Route::get('/', [LoadController::class, 'index']);

Route::get('/login', [UserController::class, 'login'])
    ->name('login')
    ->middleware('guest'); // App\Providers

Route::post('/logout', [UserController::class, 'logout'])
    ->middleware('auth');

Route::get('/register', [UserController::class, 'create'])
    ->middleware('guest');

Route::post('/users', [UserController::class, 'store']);
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
