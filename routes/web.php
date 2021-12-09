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
});

Route::get('/solat', function () {
    return view('solat');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::get('/settings', function () {
    return view('settings');
});

