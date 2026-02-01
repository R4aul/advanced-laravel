<?php

namespace App\Models;

use App\Dto\StudentFilterDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasOne;
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

    public function profile() : HasOne{
        return $this->hasOne(StudentProfile::class);
    }

    public function scopeFilter(Builder $query, StudentFilterDTO $filter){

        return $query->when($filter->search, function($q) use ($filter){
            $q->where('name', 'LIKE', '%'.$filter->search.'%');
        });
    }
}
