<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BoyController;
use App\Http\Controllers\GirlController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\OrderController;




Route::post('/login', [LoginController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
Route::apiResource('orders', OrderController::class);
Route::apiResource('students', StudentController::class);
Route::apiResource('grades', GradeController::class);
Route::apiResource('boys', BoyController::class);
Route::apiResource('girls', GirlController::class);


Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);


Route::post('/logout', [LoginController::class, 'logout']);


});
