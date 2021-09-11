<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\StudentsController;

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
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    
    //routing perusahaan
    Route::resource('companies', CompanyController::class);

    //routing students
    Route::get('students', [StudentsController::class, 'index'])->name('students');
    Route::get('students/create', [StudentsController::class, 'create']);
    Route::post('students/create', [StudentsController::class, 'store'])->name('students.store');
    Route::get('students-edit/{id}', [StudentsController::class, 'edit']);
    Route::post('update-student/{id}', [StudentsController::class, 'update'])->name('students.update');
    Route::get('delete-student/{id}', [StudentsController::class, 'destroy']);
    Route::get('show-student/{id}', [StudentsController::class, 'show']);
});

//HAK AKSES ADMIN
// Route::group(['middleware' => 'admin'], function () {
//     Route::resource('companies', CompanyController::class);

// });

//HAK AKSES GURU
// Route::group(['middleware' => 'guru'], function () {
//     Route::resource('companies', CompanyController::class);

// });

