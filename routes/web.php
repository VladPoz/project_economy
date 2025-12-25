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

Route::get('/input', function () {return view('input');})->middleware('auth');

Route::get('/report', function () {return view('report');})->middleware('auth');

Route::get('/analysis', function () {return view('analysis');})->middleware('auth');

Route::get('/signup', function () {return view('signup');})->name('signup');;

Route::get('/signin', function () {return view('signin');});;

Route::get('/profile', function () {return view('profile');})->middleware('auth');