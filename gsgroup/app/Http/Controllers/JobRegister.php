<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserPost;
use Auth;

class JobRegister extends Controller
{
    public function index(){
        return view('user.jobRegistration');
    }
 
    public function store(Request $request){  
        $this->validate($request,[ 
            'description'=>'required',
            'resume'=>'required',
            'passport_image'=>'required',
            'job_type'=>'required',
            'experience'=>'required',
            'working_location'=>'required',
            'education_certificate'=>'required',
        ]);

        $post = new UserPost();
        $post->description = request('description');
        $post->working_location = request('working_location');
        $post->experience = request('experience');
        $post->job_type = request('job_type');
        $post->user_id = Auth::id();  

        if($file = $request->file('passport_image')){
            $passport_image = time().$file->getClientOriginalName();
            $file->move('uploads/images/',$passport_image);
            $post->passport_image = 'uploads/images/'.$passport_image; 
        } 
        if($file = $request->file('resume')){
            $resume = time().$file->getClientOriginalName();
            $file->move('uploads/images/',$resume);
            $post->resume = 'uploads/images/'.$resume; 
        } 
        if($file = $request->file('education_certificate')){
            $education_certificate = time().$file->getClientOriginalName();
            $file->move('uploads/images/',$education_certificate);
            $post->education_certificate = 'uploads/images/'.$education_certificate; 
        } 
        $post->save();
 
        return redirect('/user-dashboard');
 
    }
}
