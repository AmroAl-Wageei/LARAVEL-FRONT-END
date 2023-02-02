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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('Admin.dashboard');
});


Route::get('footer', function () {
    return view('duplicate.footer');
});
Route::get('navbar', function () {
    return view('duplicate.navbar');
});

// ######################################################################


Route::get('home', function () {
    return view('Home');
});
Route::get('about', function () {
    return view('aboutUs');
});
Route::get('contact', function () {
    return view('contactUs');
});
Route::get('artical', function () {
    return view('artical');
});
Route::get('book', function () {
    return view('book');
});
Route::get('profile', function () {
    return view('profile');
});
Route::get('soon', function () {
    return view('comingSoon');
});
Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});
