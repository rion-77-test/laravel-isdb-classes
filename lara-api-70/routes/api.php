<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/users', [UserController::class, 'index']);
Route::apiResource('/departments', DepartmentController::class);

Route::post('/test', function (Request $request) {
    return 'Lara API is working';
});
