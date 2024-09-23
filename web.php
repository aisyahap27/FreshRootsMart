<?php

use App\Http\Controllers\HomeController;
use App\Http\Controller;
//use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/home', [HomeController::class, 'login'])->name('home');

Route::get('/', function () {
    return view('home');
});