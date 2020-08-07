@extends('layouts.admin')

@section('styles')
    <style>
        .progress-bar-animated {
            -webkit-animation: progress-bar-stripes 1s linear infinite;
            animation: progress-bar-stripes 1s linear infinite;
        }
    </style>
@stop

@section('content')
    @if(Auth::user()->role->role=='admin')
        <div class="row">
            <h2>Welcome admin</h2>
            {{--<div class="col-sm-12 col-md-3">--}}
                {{--<div class="card">--}}
                    {{--<div class="header bg-info">--}}
                        {{--<h4 class="title text-center">Users</h4>--}}
                    {{--</div>--}}
                    {{--<div class="content">--}}
                        {{--<h1 class="title text-center">--}}
                            {{--56--}}
                        {{--</h1>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-12 col-md-3">--}}
                {{--<div class="card">--}}
                    {{--<div class="header bg-info">--}}
                        {{--<h4 class="title text-center">Users</h4>--}}
                    {{--</div>--}}
                    {{--<div class="content">--}}
                        {{--<h1 class="title text-center">--}}
                            {{--56--}}
                        {{--</h1>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-12 col-md-3">--}}
                {{--<div class="card">--}}
                    {{--<div class="header bg-info">--}}
                        {{--<h4 class="title text-center">Users</h4>--}}
                    {{--</div>--}}
                    {{--<div class="content">--}}
                        {{--<h1 class="title text-center">--}}
                            {{--56--}}
                        {{--</h1>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-12 col-md-3">--}}
                {{--<div class="card">--}}
                    {{--<div class="header bg-info">--}}
                        {{--<h4 class="title text-center">Users</h4>--}}
                    {{--</div>--}}
                    {{--<div class="content">--}}
                        {{--<h1 class="title text-center">--}}
                            {{--56--}}
                        {{--</h1>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    @elseif(Auth::user()->role->role=='employee')

    @else
        <h3>Profile Score</h3>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%">56% Completed</div>
        </div>
        <div class="text-danger">
            * Complete your profile for better score
        </div>
    @endif
@stop