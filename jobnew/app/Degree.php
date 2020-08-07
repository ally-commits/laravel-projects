<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    protected $table = 'degree';
    protected $fillable = [
        'college_name',
        'profile_id',
        'year',
        'percentage'
    ];
}
