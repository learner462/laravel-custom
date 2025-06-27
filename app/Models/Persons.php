<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    protected $table = 'persons';

    protected $fillable = [
        'full_name',
            'email',            
            'phone',
            'gender',
            'is_adult',
            'age',
    ];
}
