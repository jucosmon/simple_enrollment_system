<?php
# Jelah Marie Dango & Rezelle June Udtohan

use App\Http\Controllers\AddStudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentPageController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [DashboardController::class, 'index']);
Route::get('/student_page', [StudentPageController::class, 'index'])->name('student_page');


Route::get('/add-student', [AddStudentController::class, 'store'])->name('student.create');

Route::get('/add-student-page', function () {
    return view('add-student-page');
});


# Jelah Marie Dango & Rezelle June Udtohan
