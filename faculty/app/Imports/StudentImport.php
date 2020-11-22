<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'student_id'=>$row['0'],
            'fName'=>$row['1'],
            'lName'=>$row['2'],
            'campus'=>$row['3'],
            'dept'=>strtoupper($row['4']),
            'batch'=>$row['5'],
            'section'=>strtoupper($row['6']),
        ]);
    }
}
