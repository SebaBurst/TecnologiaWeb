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
    return view('credenciales');
});

Route::get('/registro', function () {
    return view('register');
});


Route::get('/dashboard', function () {
    return view('navbar');
});

Route::get('/estudiante', function () {
    return view('dashboardStudent');
});


Route::get('/profesor', function () {
    return view('profesorStudent');
});

