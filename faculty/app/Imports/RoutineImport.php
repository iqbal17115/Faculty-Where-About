<?php

namespace App\Imports;

use App\Models\Routine;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RoutineImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Routine([
            'course_code'=>$row['0'],
            'course_title'=>$row['1'],
            'dept'=>strtoupper($row['2']),
            'batch'=>$row['3'],
            'section'=>strtoupper($row['4']),
            'day'=> strtoupper($row['5']),
            'start_time'=>date("g:i A", strtotime($row['6'])),
            'end_time'=>date("g:i A", strtotime($row['7'])),
            'building'=>strtoupper($row['8']),
            'room_no'=>$row['9'],
            'initial'=> strtoupper(Session::get('initial')),
        ]);
    }
}
