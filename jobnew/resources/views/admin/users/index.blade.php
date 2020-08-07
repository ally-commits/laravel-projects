@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="header">
            <h4 class="title">Registered users</h4>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-stripedr">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Score</th>
                    <th>Purpose</th>
                    <th>Action</th>
                </thead>
                @foreach($users as $user)
                    <tr>
                        <td><a href="{{route('user.view',$user->id)}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role->role}}</td>
                        @if($user->role->role=='seeker')
                            <td>
                                <span class="btn btn-success btn-sm">60%</span>
                            </td>
                            <td>{{$user->purpose}}</td>
                            <td>
                                <a href="{{route('user.remove',$user->id)}}" class="btn btn-sm btn-danger btn-danger btn-round">remove</a>
                            </td>
                        @else
                            <td></td>
                            <td></td>
                        @endif
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                {{$users->render()}}
            </div>
        </div>
    </div>
@stop