<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pu extends Model
{
    protected $table = 'pu';
    protected $fillable = [
        'college_name',
        'profile_id',
        'year',
        'percentage'
    ];
}
