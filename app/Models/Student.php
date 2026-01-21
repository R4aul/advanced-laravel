<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class Student extends Authenticable
{
    protected $fillable = [
        'name',
        'matricula',
        'email',
        'password',
        'status',
    ];

    protected $hidden = [
        'password'
    ];

    public function getAuthIdentifierName()
    {
        return 'matricula';
    }
}
