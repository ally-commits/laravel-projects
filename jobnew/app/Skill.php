<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable =['skill'];
    public function getSkillAttribute($val){
        return strtoupper($val);
    }
}
