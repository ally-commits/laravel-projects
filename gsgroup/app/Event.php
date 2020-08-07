<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";
    protected $fillable = [
        'user_id',
        'event_kind',
        'location',
        'door',
        'date',
        'day_night',
        'crowd', 
        'description'
    ];

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }
}
