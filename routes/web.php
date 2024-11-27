<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('index');

// Route dẫn đến trang About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route dẫn đến trang Courses
Route::get('/courses', function () {
    return view('courses');
})->name('courses');

// Route dẫn đến trang Instructor
Route::get('/instructors', function () {
    return view('instructors');
})->name('instructors');

// Route dẫn đến trang Instructor Details
Route::get('/instructor-details', function () {
    return view('instructor-details');
})->name('instructor.details');

// Route dẫn đến trang Blog
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// Route dẫn đến trang Login
Route::get('/login', function () {
    return view('login');
})->name('login');
