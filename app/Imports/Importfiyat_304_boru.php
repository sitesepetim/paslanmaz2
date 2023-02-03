<?php

namespace App\Imports;

use App\Models\fiyatListesi;
use Maatwebsite\Excel\Concerns\ToModel;

class Importfiyat_304_boru implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {






        return new fiyatListesi([
            'kalite'     => $row[0],
            'ebat'     => $row[8].'/'.$row[9].'/'.$row[10],
            'kilo_mt'     => $row[2],
            'metre'     => $row[3],
            'top_kg'     => $row[4],
            'birim'     => $row[5],
            'plaka'     => $row[6],
            'type'     => "304_boru",
        ]);
    }
}
