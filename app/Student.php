<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'email'
    ];
}
