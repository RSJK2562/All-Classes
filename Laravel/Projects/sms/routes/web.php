<?php

use App\Http\Controllers\Batches;
use App\Http\Controllers\Courses;
use App\Http\Controllers\Enrollment;
use App\Http\Controllers\MyController;
use App\Http\Controllers\MyStudent;
use App\Http\Controllers\Payment;
use App\Http\Controllers\PrintReport;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Teachers;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // sms
    Route::get('/sms/dashboard', [MyController::class, 'dashboard'])->name('sms.dashboard');
    
    Route::get('/sms/profile', [MyController::class, 'smsProfile'])->name('sms.profile');
    Route::post('/sms/profile/store', [MyController::class, 'smsStore'])->name('sms.profile.store');
    
    Route::get('/sms/changepwd', [MyController::class, 'changepassword'])->name('sms.changepwd');
    Route::post('/sms/passwordupdate', [MyController::class, 'passwordUpdate'])->name('sms.password.update');

    Route::get('/sms/logout', [MyController::class, 'SmsLogout'])->name('sms.logout');

    // student
    Route::get('/students', [MyStudent::class, 'index'])->name('sms.student');
    Route::get('/add/student', [MyStudent::class, 'create'])->name('sms.add.student');
    Route::post('/add/new/student', [MyStudent::class, 'store'])->name('sms.add.new.student');
    Route::get('/show/student/{id}', [MyStudent::class, 'show'])->name('sms.show.student');
    Route::get('/show/edit/student/{id}', [MyStudent::class, 'edit'])->name('sms.edit.student');
    Route::post('/edit/student/{id}', [MyStudent::class, 'update'])->name('sms.edit.student.data');
    Route::get('/delete/student/{id}', [MyStudent::class, 'destroy'])->name('sms.delete.student');

    // teacher
    Route::get('/teachers', [Teachers::class, 'index'])->name('sms.teacher');
    Route::get('/add/teacher', [Teachers::class, 'create'])->name('sms.add.teacher');
    Route::post('/add/new/teacher', [Teachers::class, 'store'])->name('sms.add.new.teacher');
    Route::get('/show/teacher/{id}', [Teachers::class, 'show'])->name('sms.show.teacher');
    Route::get('/show/edit/teacher/{id}', [Teachers::class, 'edit'])->name('sms.edit.teacher');
    Route::post('/edit/teacher/{id}', [Teachers::class, 'update'])->name('sms.edit.teacher.data');
    Route::get('/delete/teacher/{id}', [Teachers::class, 'destroy'])->name('sms.delete.teacher');

    // courses
    Route::get('/courses', [Courses::class, 'index'])->name('sms.courses');
    Route::get('/add/course', [Courses::class, 'create'])->name('sms.add.courses');
    Route::post('/add/new/course', [Courses::class, 'store'])->name('sms.add.new.course');
    Route::get('/show/courses/{id}', [Courses::class, 'show'])->name('sms.show.courses');
    Route::get('/show/edit/courses/{id}', [Courses::class, 'edit'])->name('sms.edit.courses');
    Route::post('/edit/course/{id}', [Courses::class, 'update'])->name('sms.edit.course.data');
    Route::get('/delete/courses/{id}', [Courses::class, 'destroy'])->name('sms.delete.courses');

    // batches
    Route::get('/batches', [Batches::class, 'index'])->name('sms.batches');
    Route::get('/add/batches', [Batches::class, 'create'])->name('sms.add.batches');
    Route::post('/add/new/batche', [Batches::class, 'store'])->name('sms.add.new.batch');
    Route::get('/show/batch/{id}', [Batches::class, 'show'])->name('sms.show.batch');
    Route::get('/show/edit/batch/{id}', [Batches::class, 'edit'])->name('sms.edit.batch');
    Route::post('/edit/batch/{id}', [Batches::class, 'update'])->name('sms.edit.batch.data');
    Route::get('/delete/batch/{id}', [Batches::class, 'destroy'])->name('sms.delete.batch');

    // enrollment
    Route::get('/enrollments', [Enrollment::class, 'index'])->name('sms.enrollment');
    Route::get('/add/enroll', [Enrollment::class, 'create'])->name('sms.add.enroll');
    Route::post('/add/new/enroll', [Enrollment::class, 'store'])->name('sms.add.new.enroll');
    Route::get('/show/enroll/{id}', [Enrollment::class, 'show'])->name('sms.show.enroll');
    Route::get('/show/edit/enroll/{id}', [Enrollment::class, 'edit'])->name('sms.edit.enroll');
    Route::post('/edit/enroll/{id}', [Enrollment::class, 'update'])->name('sms.edit.enroll.data');
    Route::get('/delete/enroll/{id}', [Enrollment::class, 'destroy'])->name('sms.delete.enroll');

    // payment
    Route::get('/payments', [Payment::class, 'index'])->name('sms.payment');
    Route::get('/create/payment', [Payment::class, 'create'])->name('sms.create.payment');
    Route::post('/add/new/payment', [Payment::class, 'store'])->name('sms.add.new.payment');
    Route::get('/show/payment/{id}', [Payment::class, 'show'])->name('sms.show.payment');
    Route::get('/show/edit/payment/{id}', [Payment::class, 'edit'])->name('sms.edit.payment');
    Route::post('/edit/payment/{id}', [Payment::class, 'update'])->name('sms.edit.payment.data');
    Route::get('/delete/payment/{id}', [Payment::class, 'destroy'])->name('sms.delete.payment');

    // print
    Route::get('/print/report/{id}', [PrintReport::class, 'index'])->name('sms.print.report');
});

require __DIR__ . '/auth.php';
