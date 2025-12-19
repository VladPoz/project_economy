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

Route::get('/', function () {return view('index');});

Route::get('/input', function () {return view('input');});

Route::get('/report', function () {return view('report');});

Route::get('/hz', function () {return view('hz');});

Route::get('/singup', function () {return view('singup');});

Route::get('/singin', function () {return view('singin');});

Route::get('/profile', function () {return view('profile');});