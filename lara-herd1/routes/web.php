<?php

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

Route::get('/price', function () {
    return view('pages.price');
})->name("price");
Route::get('/plan', function () {
    return view('pages.compare-plan');
})->name('compare-plan');
