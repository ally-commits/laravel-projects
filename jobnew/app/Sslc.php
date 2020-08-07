<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sslc extends Model
{
    protected $table = 'sslc';
    protected $fillable = [
        'college_name',
        'profile_id',
        'year',
        'percentage'
    ];
}
