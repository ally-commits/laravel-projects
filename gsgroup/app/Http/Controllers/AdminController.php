<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserPost;
use App\Event;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view('admin.dashboard');
    }
    public function jobs() {
        $users = User::all();
        $posts =    ::all();
        return view('admin.job',['users' => $users,'posts'=>$posts]);
    }
    public function events() {
        $users = User::all();
        $events = Event::all();
        return view('admin.event',['users' => $users,'events'=>$events]);
    }
}