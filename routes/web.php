<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\DetailCompanyController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\infoPKLController;

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

//alihkan ke landing page (AKMAL)
Route::get('/', [HomeController::class, 'landingpage']);

// Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('home', [PagesController::class, 'home'])->name('home');
    Route::get('home_siswa', [PagesController::class, 'home_siswa'])->name('home_siswa');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    
    //routing perusahaan
    Route::resource('companies', CompanyController::class);

    // routing detail perusahaan
    Route::resource('company-detail', DetailCompanyController::class);

    //routing students
    Route::get('students', [StudentsController::class, 'index'])->name('students');
    Route::get('students/create', [StudentsController::class, 'create']);
    Route::post('students/create', [StudentsController::class, 'store'])->name('students.store');
    Route::get('students-edit/{id}', [StudentsController::class, 'edit']);
    Route::post('update-student/{id}', [StudentsController::class, 'update'])->name('students.update');
    Route::get('delete-student/{id}', [StudentsController::class, 'destroy']);
    Route::get('show-student/{id}', [StudentsController::class, 'show']);
    Route::get('students/importView', [StudentsController::class, 'importView']);
    Route::post('import', [StudentsController::class, 'import'])->name('import');

    //routing mentor
    Route::get('mentors', [MentorController::class, 'index'])->name('mentors');
    Route::get('mentors/create', [MentorController::class, 'create']);
    Route::post('mentors/create', [MentorController::class, 'store'])->name('mentors.store');
    Route::get('delete-mentor/{id}', [MentorController::class, 'destroy']);
    Route::get('mentor-edit/{id}', [MentorController::class, 'edit']);
    Route::post('update-mentor/{id}', [MentorController::class, 'update'])->name('mentors.update');

    //routing teacher
    Route::get('teachers', [TeacherController::class, 'index'])->name('teachers');
    Route::get('teachers/create', [TeacherController::class, 'create']);
    Route::post('teachers/create', [TeacherController::class, 'store'])->name('teachers.store');
    Route::get('delete-teacher/{id}', [TeacherController::class, 'destroy']);
    Route::get('teacher-edit/{id}', [TeacherController::class, 'edit']);
    Route::post('update-teacher/{id}', [TeacherController::class, 'update'])->name('teachers.update');

    //routing journal
    Route::get('journal', [JournalController::class, 'index'])->name('journal');
    Route::get('journal/create', [JournalController::class, 'create']);
    Route::post('journal/create', [JournalController::class, 'store'])->name('journal.store');
    Route::get('journal-edit/{id}', [JournalController::class, 'edit']);
    Route::post('update-journal/{id}', [JournalController::class, 'update'])->name('journal.update');
    Route::get('delete-journal/{id}', [JournalController::class, 'destroy']);

    //routing presensi
    Route::get('presensi', [PresensiController::class, 'index'])->name('presensi');
    Route::get('presensi/create', [PresensiController::class, 'create']);
    Route::post('presensi/create', [PresensiController::class, 'store'])->name('presensi.store');
    Route::get('presensi-edit/{id}', [PresensiController::class, 'edit']);
    Route::post('update-presensi/{id}', [PresensiController::class, 'update'])->name('presensi.update');

    //routing info PKL
    Route::get('infoPKL', [infoPKLController::class, 'indexAll']);
    Route::get('/show/{id}', [infoPKLController::class, 'show']);
    Route::get('infoPKL/infoPKLMentor', [infoPKLController::class, 'infoPKLMentor']);
    Route::get('infoPKL/infoPKLTeachers', [infoPKLController::class, 'infoPKLTeachers']);
    Route::get('infoPKL/infoPKLSiswa', [infoPKLController::class, 'infoPKLSiswa']);
});

//HAK AKSES ADMIN
// Route::group(['middleware' => 'admin'], function () {
//     Route::resource('companies', CompanyController::class);

// });

//HAK AKSES GURU
// Route::group(['middleware' => 'guru'], function () {
//     Route::resource('companies', CompanyController::class);

// });

