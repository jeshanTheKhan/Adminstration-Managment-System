<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/Cources-add', [CourseController::class, 'index'])->name('add.course');
Route::get('/Cources-Table', [CourseController::class, 'table'])->name('all.course');
Route::get('/Department-add', [DepartmentController::class, 'index'])->name('add.department');
Route::get('/Department-Table', [DepartmentController::class, 'table'])->name('all.department');
Route::get('/Teacher-add', [TeacherController::class, 'index'])->name('add.teacher');
Route::get('/Teacher-Table', [TeacherController::class, 'table'])->name('all.teacher');
Route::get('/Student-add', [StudentController::class, 'index'])->name('add.student');
Route::get('/Student-Table', [StudentController::class, 'table'])->name('all.student');

Route::post('/Department-Form-Add', [DepartmentController::class, 'add'])->name('department.save');
Route::post('/Course-Form-Add', [CourseController::class, 'add'])->name('course.save');
Route::post('/Teacher-Infprmation-Add', [TeacherController::class, 'add'])->name('teacher.save');