<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    
    protected $fillable = [
        'name'
    ];
}
