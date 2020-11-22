<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;
    protected $fillable=['course_code', 'course_title', 'dept', 'batch', 'section', 'day', 'start_time', 'end_time', 'building', 'room_no', 'initial'];

}
