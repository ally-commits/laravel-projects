<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable= [
      'user_id',
      'state_id',
        'city',
        'dob',
        'address',
        'country',
        'languages',
        'hobbies',
        'profile_image',
        'sslc',
        'pu',
        'degree',
        'pg'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function skills(){
        return $this->belongsToMany('App\Skill');
    }
    public function sslcdata(){
        return $this->hasOne('App\Sslc');
    }
    public function pudata(){
        return $this->hasOne('App\Pu');
    }
    public function degreedata(){
        return $this->hasOne('App\Degree');
    }
    public function pgdata(){
        return $this->hasOne('App\Pg');
    }
}
