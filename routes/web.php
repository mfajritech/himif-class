<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [authController::class, 'registerView'])->name('get-register');
Route::post('/register', [authController::class, 'register'])->name('post-register');
Route::get('/login', [authController::class, 'loginView'])->name('get-login');
Route::post('/login', [authController::class, 'login'])->name('post-login');
Route::get('logout', [authController::class, 'logout'])->name('get-logout');

Route::middleware('role:student')->prefix('student')->group(function(){
    Route::get('dashboard', [StudentController::class, 'index'])->name('student-dashboard');
});

Route::middleware('role:coach')-> prefix('coach')->group(function(){
    Route::get('dashboard', [CoachController::class, 'index'])->name('coach-dashboard');
});

Route::middleware('role:admin')->prefix('admin')->group(function(){
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin-dashboard');
    Route::get('manage-course', [AdminController::class, 'manageCourse'])->name('get-admin-manage-course');
    Route::get('add-course', [AdminController::class, 'addCourseView'])->name('get-admin-add-course');
    Route::post('add-course', [AdminController::class, 'addCourse'])->name('post-admin-add-course');

    Route::get('manage-coach', [AdminController::class, 'manageCoach'])->name('get-admin-manage-coach');
    Route::get('add-coach', [AdminController::class, 'addCoachView'])->name('get-admin-add-coach');
    Route::post('add-coach', [AdminController::class, 'addCoach'])->name('post-admin-add-coach');

});
