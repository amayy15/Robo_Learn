<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Course2Controller;
use App\Http\Controllers\Course3Controller;
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
    return view('register');
});


Route::get('/login', [LoginController::class, 'loginPage'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginProses'])->name('loginproses');
// Route::post('/logout', 'AuthController@logout')->name('logout');

Route::get('/register', [RegisterController::class, 'registerPage'])->name('register');
Route::post('/register', [RegisterController::class, 'registerProses'])->name('registerPost');


Route::get('/home', function(){
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/courses2', function () {
    return view('courses');
});

Route::get('/courses3', function () {
    return view('courses');
});

Route::get('/course', [CourseController::class, 'index'])->name('index');

Route::get('/course2', [Course2Controller::class, 'index2'])->name('index2');

Route::get('/course3', [Course3Controller::class, 'index3'])->name('index3');
