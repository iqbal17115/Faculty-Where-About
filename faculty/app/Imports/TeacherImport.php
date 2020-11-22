<?php

namespace App\Imports;

use App\Models\Teacher;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TeacherImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Teacher([
            'teacher_id'=>$row['0'],
            'fName'=>$row['1'],
            'lName'=>$row['2'],
            'initial'=>strtoupper($row['3']),
            'dept'=>strtoupper($row['4']),
        ]);

        
    }
}
