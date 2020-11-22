<?php

namespace App\Imports;

use App\Models\Councilling;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\ToModel;

class CouncillingImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Councilling([
            'initial'=> strtoupper(Session::get('initial')),
            'day'=>strtoupper($row['0']),
            'start_time'=>date("g:i A", strtotime($row['1'])),
            'end_time'=>date("g:i A", strtotime($row['2'])),
        ]);
    }
}
