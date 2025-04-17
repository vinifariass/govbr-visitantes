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

Route::get('/visitantes', function () {
    return view('visitantes');
});

Route::get('/template', function () {
    return view('template');
})->name('template');

Route::get('/table', function () {
    return view('table');
});

Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::get('/cracha', function () {
    return view('cracha');
})->name('cracha');

Route::get('/relatorios', function () {
    return view('relatorios');
})->name('relatorios');

Route::get('/login', function () {
    return view('login');
})->name('login');