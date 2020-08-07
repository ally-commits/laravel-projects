<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $posts = DB::table('user_posts')->where('user_id',$user->id)->get(); 
        $events = DB::table('events')->where('user_id',$user->id)->get(); 
        return view('user/user-dashboard',['posts' => $posts,'events'=>$events,'user' => $user]);
    }
}
