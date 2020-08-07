@extends('layouts.app')

@section('content')
@include('includes.nav-d')
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

                <h5>Jobs Applications</h5>
                <div class="row ">
                    @foreach ($posts as $val)
                        <div class="col-sm-4 card p-5 m-5 shadow-lg">   
                            <p><b>Job Type:</b> {{$val->job_type}}</p>
                            <p><b>Experience:</b> {{$val->experience}}</p>
                            <p><b>Current Working Location:</b> {{$val->working_location}}</p>
                            <div style="width: 100%; display: flex;justify-content: space-between;">
                                <a style="text-decoration: none; width: 31%; height: 100%;" class="btn btn-primary p-1 shadow-sm" href="{{$val->resume}}">
                                    Resume File.
                                </a>
                                <a style="text-decoration: none; width: 31%; height: 100%;" class="btn btn-primary p-1 shadow-sm" href="{{$val->passport_image}}">
                                    Passport Image
                                </a>
                                <a style="text-decoration: none; width: 31%; height: 100%;" class="btn btn-primary p-1 shadow-sm" href="{{$val->education_certificate}}">
                                    Education Certifictae
                                </a>
                            </div>
                            <p style="font-style: italic;"><b>Message:</b> {{ $val->description }}</p>
                        </div>
                    @endforeach
                </div>

                <h5>Events Registered</h5>
                <div class="row ">
                    @foreach ($events as $val)
                        <div class="col-sm-4 card p-5 m-5 shadow-lg">   
                            <p><b>Kind of Event:</b> {{$val->event_kind}}</p>
                            <p><b>Location:</b> {{$val->location}}</p>
                            <p><b>Location(Indoor/Outdoor):</b> {{$val->door}}</p>
                            <p><b>Date:</b> {{$val->date}}</p>
                            <p><b>(Day/Night):</b> {{$val->day_night}}</p>
                            <p><b>Crowd:</b> {{$val->crowd}}</p>
                            
                            <p style="font-style: italic;"><b>Message:</b> {{ $val->description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
