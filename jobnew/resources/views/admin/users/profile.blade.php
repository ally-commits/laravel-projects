@extends('layouts.admin')

@section('content')
    <div class="row">

        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <h4 class="title">Edit Profile</h4>
                    @include('includes.form-error')
                </div>
                <div class="content">
                    {!! Form::model($user,['method'=>'PATCH','action'=>['ProfileController@update',$user->id],'files'=>'true']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name','Name') !!}
                                {!! Form::text('name',null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('email','Email') !!}
                                {!! Form::text('email',null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('profile_image','Upload new profile image') !!}
                                {!! Form::file('profile_image',['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('state_id','Choose state') !!}
                                {!! Form::select('state_id',$states,$user->profile->state_id,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('city','City') !!}
                                {!! Form::text('city',$user->profile->city,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('dob','Date Of Birth') !!}
                                {!! Form::date('dob',$user->profile->dob,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('facebook','Facebook profile') !!}
                                {!! Form::text('facebook',$user->profile->facebook,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('linkdin','Linkdin profile') !!}
                                {!! Form::text('linkdin',$user->profile->linkdin,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('instagram','Instagram profile') !!}
                                {!! Form::text('instagram',$user->profile->instagram,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('address','Address') !!}
                                {!! Form::text('address',$user->profile->address,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('password','New password') !!}
                                {!! Form::password('password',['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            {!! Form::submit('Update Profile',['class'=>'btn btn-info']) !!}
                        </div>
                    </div>
                    {{--<button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>--}}
                    <div class="clearfix"></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                </div>
                <div class="content">
                    <div class="author">
                        <a href="#">
                            <img class="avatar border-gray" src="{{asset($user->profile->profile_image)}}" alt="..."/>

                            <h4 class="title">{{$user->name}}<br /><br>
                            </h4>
                        </a>
                    </div>
                    <p class="description text-center">
                        {{$user->profile->about}}
                    </p>
                    <div class="text-center">
                        <a href="{{$user->profile->facebook}}"><img src="{{asset('svg/circle-facebook.svg')}}" alt="" style="width: 20px;height: 20px"></a>
                        <a href="{{$user->profile->instagram}}"><img src="{{asset('svg/instagram.svg')}}" alt="" style="width: 20px;height: 20px"></a>
                        <a href="{{$user->profile->linkdin}}"><img src="{{asset('svg/youtube.svg')}}" alt="" style="width: 20px;height: 20px"></a>
                    </div>
                </div>
                <hr>

            </div>
        </div>

    </div>
@stop