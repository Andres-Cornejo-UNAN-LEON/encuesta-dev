<?php

namespace App\Exports;

use App\Models\ResultadoEncuesta;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;

class DatosEncuestaExport implements FromView, ShouldAutoSize, WithTitle
{
    public function view(): View
    {
        return View('reporte.excel.encuesta', [
            'datos' => ResultadoEncuesta::all()
        ]);
    }
    public function title(): string
    {
        return "Encuesta";
    }
}
