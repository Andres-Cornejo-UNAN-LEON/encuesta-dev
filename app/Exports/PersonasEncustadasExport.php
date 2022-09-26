<?php

namespace App\Exports;

use App\Models\DatosAcademicos;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;

class PersonasEncustadasExport implements FromView, ShouldAutoSize, WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return View('reporte.excel.encuestados', [
            'datos' => DatosAcademicos::all()
        ]);
    }
    public function title(): string
    {
        return "Informacion encuestados";
    }
}
