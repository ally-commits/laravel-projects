<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pg extends Model
{
    protected $table = 'pg';
    protected $fillable = [
        'college_name',
        'profile_id',
        'year',
        'percentage'
    ];
}
