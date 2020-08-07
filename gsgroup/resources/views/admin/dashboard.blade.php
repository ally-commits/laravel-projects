@extends('layouts.app')

@section('content') 
    @include('includes.admin-nav')
    <div style="margin-top: 60px; display: flex;justify-content: center;height: 80vh;width: 100%; align-items: center;">
        <button class="m-2 p-2 btn btn-success">
            <a class="text-white" href="/admin/job-r">View Job Registration</a>
        </button>
        <button class="m-2 p-2 btn btn-primary">
            <a class="text-white" href="/admin/event-r" >View Event Registration</a>
        </button>
    </div>
@endsection
