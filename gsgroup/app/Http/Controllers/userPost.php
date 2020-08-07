<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class userPost extends Controller
{
    
    public function index(){
        return view('user.jobRegistration');
    }
 
    public function store(){
 
        $post = new UserPost();
 
        $post->name = request('name');
        $post->description = request('description');

        $post->save();
 
        return redirect('/dashboard');
 
    }
}
