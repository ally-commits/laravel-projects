@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-2">
            <img src="img/logo.png" alt="" class="rounded-circle" style="width: 100%;">
        </div>
        <div class="col-9 p-4">
            <div class="d-flex justify-content-between align-items-baseline">
                <h3>{{ $user->username }}</h3>

                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong class="mr-2">{{$user->posts->count()}}</strong>posts</div>
                <div class="pr-5"><strong class="mr-2">120k</strong>followers</div>
                <div class="pr-5"><strong class="mr-2">212k</strong>following</div>
            </div>
            <div class="pt-2 font-weight-bold">{{ $user->profile->title}}</div>
            <div>{{ $user->profile->description}}</div>
            <div><a href="#">{{ $user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row">
        @foreach($user->posts as $post)
        <div class="col-4">
            <img src="/storage/{{ $post->image }}" class="w-100 pt-5" style="height: 300px;"/>
        </div> 
        @endforeach
    </div>
</div>
@endsection
