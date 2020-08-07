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
            <h3>Jobs Applied</h3>
            <div class="row">
                @foreach ($posts as $val)
                    <div class="col-sm-4 card p-5 m-5 shadow-lg">   
                        @foreach ($users as $user)
                            @if($val->user_id == $user->id)
                                <p><b>Name:</b> {{$user->name}}</p>
                                <p><b>Email:</b> {{$user->email}}</p>
                            @endif
                        @endforeach
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
        </div>
    </div>
</div>
@endsection