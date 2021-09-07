<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [
    AuthController::class,
    'index'
])->name('login')->middleware('guest');

Route::get('/home', [
    AuthController::class,
    'home'
])->name('home')
    ->middleware('user');

Route::post('/verify', [
    AuthController::class,
    'verify'
])->name('verify')
    ->middleware('guest');

Route::get('/logout', [
    AuthController::class,
    'logout'
])->name('logout')
    ->middleware('user');

//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
