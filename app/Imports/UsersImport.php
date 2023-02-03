<?php

namespace App\Imports;

use App\Models\musteri;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        if (musteri::where('uniq_id','=',$row[0])->count()<1){



        return new musteri([
            'name'     => $row[12],
            'uniq_id'     => $row[0],
            'email'    => $row[14],
            'phone'  => $row[13],
            'sehir'  => $row[15],
            'type'  => 2,
        ]);
        }
    }
}
