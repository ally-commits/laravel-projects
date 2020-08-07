<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Auth;

class EventController extends Controller
{
    public function index(){
        return view('user.eventRegistration');
    }

    public function store(Request $request){  
        $this->validate($request,[ 
            'description'=>'required',
            'day_night'=>'required',
            'crowd'=>'required',
            'date'=>'required',
            'door'=>'required',
            'location'=>'required',
            'event_kind'=>'required',
        ]);

        $event = new Event();
        $event->description = request('description');
        $event->location = request('location');
        $event->date = request('date');
        $event->door = request('door');
        $event->crowd = request('crowd');
        $event->location = request('location');
        $event->event_kind = request('event_kind');
        $event->day_night = request('day_night'); 
        $event->user_id = Auth::id();  
            
        $event->save();
 
        return redirect('/user-dashboard');
 
    }
}
