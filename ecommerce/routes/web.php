<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;


Route::get('/', [GuestController::class, 'showLoginForm'])->name('home');
Route::get('/register',[GuestController::class,'regist'])->name('register');
Route::post('/register',[GuestController::class,'signup']);
Route::get('/index',[GuestController::class,'index']);
Route::post('/login',[GuestController::class,'login'])->name('login');