<?php

namespace App\Imports;

use App\Models\fiyatListesi;
use Maatwebsite\Excel\Concerns\ToModel;

class Importfiyat_430_sac implements ToModel
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
            'kalinlik'     => $row[1],
            'ebat'     => $row[2],
            'kg'     => $row[3],
            'birim'     => $row[4],
            'plaka'     => $row[5],
            'type'     => "430_sac",
        ]);
    }
}
