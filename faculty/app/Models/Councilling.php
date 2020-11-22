<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Councilling extends Model
{
    use HasFactory;
    protected $fillable=['initial', 'day', 'start_time', 'end_time'];

}
