@extends('layouts.app')

@section('content') 
@include('includes.admin-nav')
<div class="container" style="margin-top: 60px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
            <h3>Events Registered</h3>
            <div class="row">
                @foreach ($events as $val)
                    <div class="col-sm-4 card p-5 m-5 shadow-lg">   
                        @foreach ($users as $user)
                            @if($val->user_id == $user->id)
                                <p><b>Name:</b> {{$user->name}}</p>
                                <p><b>Email:</b> {{$user->email}}</p>
                            @endif
                        @endforeach 
                        <p><b>Kind of Event:</b> {{$val->event_kind}}</p>
                        <p><b>Location:</b> {{$val->location}}</p>
                        <p><b>Location(Indoor/Outdoor):</b> {{$val->door}}</p>
                        <p><b>Date:</b> {{$val->date}}</p>
                        <p><b>(Day/Night):</b> {{$val->day_night}}</p>
                        <p><b>Crowd:</b> {{$val->crowd}}</p>
                        
                        <p style="font-style: italic;"><b>Message:</b> {{ $val->description }}</p>
                        <p style="font-style: italic;"><b>Message:</b> {{ $val->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection