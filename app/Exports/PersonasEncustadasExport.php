<?php

namespace App\Exports;

use App\Models\DatosAcademicos;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PersonasEncustadasExport implements FromView, ShouldAutoSize
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
}
