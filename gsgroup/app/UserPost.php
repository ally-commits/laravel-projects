<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPost extends Model
{   
    protected $table = "user_posts";
    protected $fillable = [
        'user_id',
        'job_type',
        'resume',
        'experience',
        'passport_image',
        'description',
        'working_location',
        'education_certificate'
    ];

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }
}
