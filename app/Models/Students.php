<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [

    	'student_no',
    	'first_name', 
    	'last_name',
    	'middle_name',
    	'age',
    	'birthdate', 
    	'grade_level', 
    	'strand',
    	'image'
    ];
}
