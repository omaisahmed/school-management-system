<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\ClassroomsController;
use App\Http\Controllers\ClassroutineController;
use App\Http\Controllers\SyllabusController;
use Illuminate\Http\RedirectResponse;

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
    return view('auth.login');
});

// Route::get('/login', function () {
//     return redirect('/dashboard');
// });

Auth::routes();

// Route::get('/students/index', [App\Http\Controllers\StudentsController::class, 'index'])->name('index');
Route::resource('users',UsersController::class);
Route::resource('teachers',TeachersController::class);
Route::resource('classes',ClassesController::class);
Route::resource('subjects',SubjectsController::class);
Route::resource('department',DepartmentsController::class);
Route::resource('students',StudentsController::class);
Route::resource('classroom',ClassroomsController::class);
Route::resource('classroutine',ClassroutineController::class);
Route::resource('syllabus',SyllabusController::class);
// Route::get('/subjects', [SubjectsController::class, 'create']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// For Roles
// Route::get('/users', function () {
//     return view('users.index');
// })->name('users');