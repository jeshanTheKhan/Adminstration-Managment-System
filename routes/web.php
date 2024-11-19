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
Route::post('/Course-Form-Add', [CourseController::class, 'add'])->name('course.save');
Route::get('Course-Edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
Route::post('/Course-Form-Update', [CourseController::class, 'update'])->name('course.update');
Route::get('Course-Delete/{id}', [CourseController::class, 'del'])->name('course.del');


Route::get('/Department-add', [DepartmentController::class, 'index'])->name('add.department');
Route::get('/Department-Table', [DepartmentController::class, 'table'])->name('all.department');
Route::post('/Department-Form-Add', [DepartmentController::class, 'add'])->name('department.save');
Route::get('Department-Edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
Route::post('/Department-Form-Update', [DepartmentController::class, 'update'])->name('department.update');
Route::get('Department-Delete/{id}', [DepartmentController::class, 'del'])->name('department.del');

Route::get('/Teacher-add', [TeacherController::class, 'index'])->name('add.teacher');
Route::get('/Teacher-Table', [TeacherController::class, 'table'])->name('all.teacher');
Route::post('/Teacher-Infprmation-Add', [TeacherController::class, 'add'])->name('teacher.save');
Route::get('Teacher-Edit/{id}', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::post('/Teacher-Update', [TeacherController::class, 'update'])->name('teacher.update');
Route::get('Teacher-Delete/{id}', [TeacherController::class, 'del'])->name('teacher.del');

Route::get('/Student-add', [StudentController::class, 'index'])->name('add.student');
Route::get('/Student-Table', [StudentController::class, 'table'])->name('all.student');
Route::post('/Student-Form-Add', [StudentController::class, 'add'])->name('student.save');
Route::get('Student-View/{id}', [StudentController::class, 'view'])->name('student.view');
Route::get('Student-Edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/Student-Form-Update', [StudentController::class, 'update'])->name('student.update');
Route::get('Student-Delete/{id}', [StudentController::class, 'del'])->name('student.del');



Route::post('/Profile-Upload', [ProfileController::class, 'upload'])->name('profile.upload');

