<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [CourseController::class, 'index']);
Route::resource('recipes', CourseController::class);

Route::get('/', [StudentController::class, 'index']);
Route::resource('recipes', StudentController::class);