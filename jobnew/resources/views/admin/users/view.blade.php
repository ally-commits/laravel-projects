@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="header">
            <h4 class="title">{{$user->name}}</h4>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-stripedr">
                <tr>
                    <th>Email</th>
                    <td>{{$user->email}}</td>
                </tr>
                <tr>
                    <th>City</th>
                    <td>{{$user->profile->city}}</td>
                </tr>
                <tr>
                    <th>Date Of Birth</th>
                    <td>{{$user->profile->dob}}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{$user->profile->address}}</td>
                </tr>
            </table>
        </div>
    </div>

@stop