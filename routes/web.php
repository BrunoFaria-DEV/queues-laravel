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
    return view('index', ['title' => 'Filas - Laravel']);
});

Route::get('/gerar-pdf', [\App\Http\Controllers\Admin\GerarPdfController::class, 'gerarPDF'])->name('gerar_pdf');
Route::get('/gerar-pdf-assincrono', [\App\Http\Controllers\Admin\GerarPdfController::class, 'gerarPDFAssincrono'])->name('gerar_pdf_assincrono');
