<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EnrollmentController;
use App\Models\Department;
use App\Models\Enrollment;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\StudentController;
use App\Http\controllers\LecturerController;

Route::get('/', function () {
    return view('layout');
});

Route::resource('/students', StudentController::class); /* instead of writing all, just this single line is engouh */
Route::resource('/lecturers', LecturerController::class); /* instead of writing all, just this single line is engouh */
Route::resource('/departments', DepartmentController::class); /* instead of writing all, just this single line is engouh */
Route::resource('/enrollments', EnrollmentController::class); /* instead of writing all, just this single line is engouh */
 