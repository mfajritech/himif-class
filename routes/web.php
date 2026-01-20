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

    Route::get('my-courses', [StudentController::class,'myCoursesView'])->name('get-student-my-courses');
    Route::get('courses', [StudentController::class,'coursesView'])->name('get-student-courses');
    Route::get('detail-course', [StudentController::class,'detailCourse'])->name('get-student-detail-courses');
    Route::get('enroll-course', [StudentController::class,'enrollView'])->name('get-student-enroll-courses');
    Route::post('enroll-course', [StudentController::class,'enroll'])->name('post-student-enroll-courses');

});

Route::middleware('role:coach')-> prefix('coach')->group(function(){
    Route::get('dashboard', [CoachController::class, 'index'])->name('coach-dashboard');
});

Route::middleware('role:admin')->prefix('admin')->group(function(){
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin-dashboard');

    Route::get('manage-course', [AdminController::class, 'manageCourse'])->name('get-admin-manage-course');
    Route::get('add-course', [AdminController::class, 'addCourseView'])->name('get-admin-add-course');
    Route::post('add-course', [AdminController::class, 'addCourse'])->name('post-admin-add-course');
    Route::get('detail-course', [AdminController::class, 'detailCourseView'])->name('get-admin-detail-course');
    Route::get('edit-course', [AdminController::class, 'editCourseView'])->name('get-admin-edit-course');
    Route::post('edit-course', [AdminController::class, 'editCourse'])->name('post-admin-edit-course');

    Route::get('manage-coach', [AdminController::class, 'manageCoach'])->name('get-admin-manage-coach');
    Route::get('add-coach', [AdminController::class, 'addCoachView'])->name('get-admin-add-coach');
    Route::post('add-coach', [AdminController::class, 'addCoach'])->name('post-admin-add-coach');
    Route::get('edit-coach', [AdminController::class, 'editCoachView'])->name('get-admin-edit-coach');
    // Route::post('edit-coach', [AdminController::class, 'editCoach'])->name('post-admin-edit-coach');
    Route::get('detail-coach', [AdminController::class, 'detailCoachView'])->name('get-admin-detail-coach');
    Route::post('delete-coach', [AdminController::class, 'deleteCoach'])->name('post-admin-delete-coach');

    Route::get('manage-student', [AdminController::class, 'manageStudent'])->name('get-admin-manage-student');
    Route::get('detail-student', [AdminController::class, 'detailStudent'])->name('get-admin-detail-student');

    Route::get('enrollment', [AdminController::class, 'enrollmentView'])->name('get-admin-enrollment');
    Route::get('detail-enrollment', [AdminController::class, 'enrollmentDetail'])->name('get-admin-detail-enrollment');
    Route::get('accept-enrollment', [AdminController::class, 'enrollmentAccept'])->name('get-admin-accept-enrollment');
    Route::get('reject-enrollment', [AdminController::class, 'enrollmentReject'])->name('get-admin-reject-enrollment');

});
