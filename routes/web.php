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
    return view('select');
});

Route::get('/admin', function () {
    return view('adminLogin');
});

Route::get('/admin/regester', function () {
    return view('adminRegester');
});

Route::get('/dbconn', function () {
    return view('dbconn');
});

Route::get('/{id}/createevent', function () {
    return view('eventcreate');
});

Route::get('{id}/viewevent', function () {
    return view('viewevent');
});
