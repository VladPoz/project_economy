<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\User\AuthController;
use App\http\Controllers\LicensController;

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

Route::get('/licens', [LicensController::class, 'licens']);

Route::get('/signup', [AuthController::class, 'signup_show'])->middleware('guest')->name('signup');
Route::post('/signup', [AuthController::class, 'signup']);

Route::get('/signin', [AuthController::class, 'signin_show'])->middleware('guest')->name('signin');
Route::post('/signin', [AuthController::class, 'signin']);

Route::get('/profile', function () {return view('profile');})->middleware('auth');