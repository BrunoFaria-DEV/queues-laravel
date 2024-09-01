<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;

class GerarPdfController extends Controller
{
    public function gerarPdf(Request $request){

        $request->get('largePDF') ? $value = intval($request->get('largePDF')) : $value = 50;
        
        $pdf = Pdf::loadView('pdf.index', ['title' => 'Pdf sem fila com '.$request->get('largePDF').' repetições', 'value' => $value])->setPaper('a4', 'landscape');

        return $pdf->download('gerado-sem-fila.pdf');
    }
}