<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentPageController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [DashboardController::class, 'index']);
Route::get('/student_page', [StudentPageController::class, 'index']);

