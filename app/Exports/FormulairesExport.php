<?php

namespace App\Exports;

use App\Formulaire;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FormulairesExport implements  WithHeadings,FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Formulaire::all();
    }

    public function headings(): array{
        return ['id','lastname','name','email','direction',
            'Nom_formation','Description','cible',
            'Validation_format','Besoin','Dev_comp',
            'Objectif_format','objectif','urgence',
            'importance','Created_at','Updated_at'];
    }

}
