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
    return view('pages.visitantes');
})->name('visitantes');

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
    return view('pages.cracha');
})->name('cracha');

Route::get('/relatorios', function () {
    return view('pages.relatorios');
})->name('relatorios');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/qrcode', function () {
    return view('qrcode');
})->name('qrcode');

Route::get('/cadastro-visitante', function () {
    return view('pages.cadastro-visitante');
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
    return view('pages.registro-visita');
})->name('registro-visita');

Route::get('/atribuir-cracha', function () {
    return view('atribuir-cracha');
})->name('atribuir-cracha');

/* Route::prefix('gerenciamento')->group(function () {
    Route::controller(VisitanteController::class)->group(function () {
        Route::get('/visitante', 'index')->name('visitante.index');
        Route::post('/visitante/store', 'store')->name('visitante.store');
        Route::get('/visitante/check-cpf', 'checkCpf')->name('visitante.checkCpf');
    });

    Route::controller(VisitaController::class)->group(function () {
        Route::get('/visita', 'index')->name('visita.index');
        Route::post('/visita/store', 'store')->name('visita.store');
    });

    Route::controller(CrachaController::class)->group(function () {
        Route::get('/cracha', 'index')->name('cracha.index');
        Route::post('/cracha/store', 'store')->name('cracha.store');
        Route::post('/cracha/atribuir', 'atribuir')->name('cracha.atribuir');
    });
});
 */
Route::prefix('relatorios')->group(function () {
    Route::controller(RelatorioController::class)->group(function () {
        Route::get('/visitas', 'visita')->name('relatorio.visita');
        Route::get('/crachas', 'cracha')->name('relatorio.cracha');
    });
});