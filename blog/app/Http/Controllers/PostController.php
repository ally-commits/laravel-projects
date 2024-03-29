<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function create(){
        return view('posts.create');
    }

    public function store() {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image'],
        ]);
        $imagepath = request('image')->store('uploads','public');
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagepath
        ]);

        return redirect('profile/'.auth()->user()->id);
    }
}
