<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\TeacherController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('students', [StudentController::class,'index']);
Route::resource('students', StudentController::class);
Route::resource('employee', EmployeeController::class);
Route::resource('staffs', StaffController::class);
Route::resource('grades', GradeController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('phones', PhoneController::class);
Route::resource('teachers', TeacherController::class);

