<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.layouts.single-master');
});

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
});

// User
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
// Auth
Route::get('/login', function () {
    return view('admin.pages.auth.login');
});
