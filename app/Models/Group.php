<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name',
        'subject_id',
        'teacher_id',
        'semester_id'
    ];
}
