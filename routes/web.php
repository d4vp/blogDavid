<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\RegisterController;
use App\http\Controllers\SessionController;


Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [SessionController::class, 'create'])->middleware('guest')->name('login.index');
Route::post('/login', [SessionController::class, 'store'])->name('login.store');
Route::get('/logout', [SessionController::class, 'destroy'])->middleware('auth')->name('login.destroy');
