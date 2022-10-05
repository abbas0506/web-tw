<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseOutlineController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructorController;

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
    return view('home');
});



Auth::routes();
Route::post('signin', [AuthController::class, 'signin']);
Route::get('signout', [AuthController::class, 'signout']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['role:admin']], function () {
    Route::view('admin', 'admin.index');
    Route::resource('courses', CourseController::class);
});



Route::group(['middleware' => ['role:student']], function () {
    Route::view('student', 'student.index');
    Route::resource('course-oultines', CourseOutlineController::class);
});
