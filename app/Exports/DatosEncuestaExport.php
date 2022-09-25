<?php

namespace App\Exports;

use App\Models\ResultadoEncuesta;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DatosEncuestaExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return View('reporte.excel.encuesta', [
            'datos' => ResultadoEncuesta::all()
        ]);
    }
}
