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

//bikin route ke halaman welcome
Route::get('/welcome', function () {
    return view('welcome');
});

//bikin route ke halaman register
Route::get('/register', function () {
    return view('register');
});

//bikin route ke halaman dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

//bikin route ke halaman alternatif
Route::get('/alternatif', function () {
    return view('alternatif');
});

//bikin route ke halaman kriteria
Route::get('/kriteria', function () {
    return view('kriteria');
});

//bikin route ke halaman app yang berada di folder layouts
Route::get('/app', function () {
    return view('layouts.app');
});
