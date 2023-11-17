<?php

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
    return view('login');
});

//route halaman register
Route::get('/register', function () {
    return view('register');
});

//route halaman dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

//route halaman alternatif
Route::get('/alternatif', function () {
    return view('alternatif');
});

//route halaman kriteria
Route::get('/kriteria', function () {
    return view('kriteria');
});

//route halaman app
Route::get('/app', function () {
    return view('layouts.app');
});

//route halaman hasil
Route::get('/hasil', function () {
    return view('hasil');
});

//route halaman profile
Route::get('/profile', function () {
    return view('profile');
});

//route halaman about
Route::get('/about', function () {
    return view('about');
});
