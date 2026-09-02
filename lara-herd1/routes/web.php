<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/test', function () {
    return view('extra.test');
});

// Route::get('/', function () {
//     return view('layouts.app');
// });

// Route::get('/price', function () {
//     return view('pages.price');
// })->name("price");

Route::get('/price', [UserController::class, 'test'])->name('price');

Route::get('/plan', function () {
    return view('pages.compare-plan');
})->name('compare-plan');

Route::get('/login', function () {
    return view('pages.auth.login');
})->name('signin');

// Role Routes
Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
// Route::get('/roles/{id}', [RoleController::class, 'details'])->name('roles.show');
