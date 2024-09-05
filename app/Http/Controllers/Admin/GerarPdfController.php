<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Barryvdh\DomPDF\Facade\Pdf;

use App\Jobs\CreatePDFJob;

class GerarPdfController extends Controller
{
    public function gerarPDF(Request $request){

        $request->get('largePDF') ? $value = intval($request->get('largePDF')) : $value = 50;

        $pdf = Pdf::loadView('pdf.pdf', ['title' => 'Pdf sem fila com '.$value.' repetições', 'value' => $value])->setPaper('a4', 'landscape');

        return $pdf->download('gerado-sem-fila.pdf');
    }

    public function gerarPDFAssincrono(Request $request){

        $request->get('largePDF') ? $value = intval($request->get('largePDF')) : $value = 50;

        // $pdf = Pdf::loadView('pdf.pdf', ['title' => 'Pdf sem fila com '.$value.' repetições', 'value' => $value])->setPaper('a4', 'landscape');

        dispatch(new CreatePDFJob($value));

        return response()->json([
            'message' => 'O PDF está sendo gerado de forma assíncrona.',
        ], 202);
    }
}
