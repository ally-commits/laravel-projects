<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::find($user);
        // dd(request());
        // dd($user);
        return view('profile.index',[
            'user' => $user
        ]);
    }
}
