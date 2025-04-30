<?php

use App\Http\Controllers\RelatorioController;
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

Route::get('/qrcode', function () {
    return view('qrcode');
})->name('qrcode');

Route::get('/cadastro-visitante', function () {
    return view('cadastro-visitante');
})->name('cadastro-visitante');

Route::post('/relatorios/pdf', [RelatorioController::class, 'exportPDF'])->name('relatorios.exportarPdf');
Route::post('/relatorios/excel', [RelatorioController::class, 'exportarExcel'])->name('relatorios.exportarExcel');

Route::get('/cracha-step', function () {
    return view('cracha-step');
})->name('cracha-step');

Route::get('/relatorios-step', function () {
    return view('relatorios-step');
})->name('relatorios-step');

Route::get('/registro-visita', function () {
    return view('registro-visita');
})->name('registro-visita');

Route::get('/atribuir-cracha', function () {
    return view('atribuir-cracha');
})->name('atribuir-cracha');