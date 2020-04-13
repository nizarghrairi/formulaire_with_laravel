<?php

namespace App\Http\Controllers;

use App\Exports\FormulairesExport;
use Maatwebsite\Excel\Facades\Excel;


class excelController extends Controller
{
 
    
    public function export() 
    {
        return Excel::download(new FormulairesExport, 'formulaires.xlsx');
    }

  
    //https://docs.laravel-excel.com/3.1/exports/
    
}
