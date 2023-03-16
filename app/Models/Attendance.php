<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory; 

    protected $table = 'attendances';

    protected $fillable = [
		'student_id',
		'date', 
		'morning_time_in',
		'morning_time_out',
		'afternoon_time_in', 
		'afternoon_time_out',
    ];
}
