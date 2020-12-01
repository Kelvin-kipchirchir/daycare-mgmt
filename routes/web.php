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

Route::view('/', 'pages.index');
Route::view('login', 'pages.login');
Route::view('register', 'pages.register');
Route::post('/', 'AccountController@create');
Route::view('/register', 'pages.register');
Route::post('/register', 'AccountController@store');
Route::get('/get','AccountController@show');
Route::view('dashboard','pages.dashboard');