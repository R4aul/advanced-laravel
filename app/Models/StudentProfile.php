<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    protected $fillable = [
        'student_id',
        'phone',
        'address',
        'birth_date'
    ];
}
