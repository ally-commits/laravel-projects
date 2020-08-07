@extends('layouts.admin')

@section('styles')
    <style>
        .skillform{
            display: none;
        }
    </style>
@stop

@section('content')
    @include('includes.form-error')
    <div class="card">
        <div class="header">
            <h4 class="title">Skills Managment</h4><br>
            <button class="btn btn-success btn-sm newskill">Add new skill</button>
            <div class="skillform">
                {!! Form::open(['method'=>'POST','action'=>'SkillController@store']) !!}
                <br>
                <div class="form-group">
                    {!! Form::label('skill','Skill Name') !!}
                    {!! Form::text('skill',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Add',['class'=>'btn btn-primary btn-sm']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-stripedr">
                <thead>
                    <th>Name</th>
                    <th>Actions</th>
                </thead>
                @foreach($skills as $skill)
                    <tr>
                        <td>{{$skill->skill}}</td>
                        <td>Edit</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                {{$skills->render()}}
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(".newskill").click(function () {
            $(this).hide().next().show("slow");
        })
    </script>
@stop