@extends('layouts.admin')
@section('styles')
    <style>
        .sslcform{
            display: none;
        }
        .puform{
            display: none;
        }
        .degreeform{
            display: none;
        }
        .pgform{
            display: none;
        }
    </style>
@stop
@section('content')
    @include('includes.form-error')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="header bg-info">
                    <h4 class="title text-center">SSLC</h4>
                </div>
                <div class="content">
                    @if(Auth::user()->profile->sslcdata == null)
                        <button class="btn btn-round btn-success btn-sm addsslc" href="">ADD SSLC DETAILS</button>
                        <div class="sslcform">
                            {!! Form::open(['method'=>'POST','action'=>'ProfileController@addsslc']) !!}

                            <div class="form-group">

                                {!! Form::label('collage_name','School Name:') !!}
                                {!! Form::text('college_name',null,['class'=>'form-control']) !!}

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        {!! Form::label('year','Year:') !!}
                                        {!! Form::text('year',null,['class'=>'form-control']) !!}

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        {!! Form::label('percentage','Percentage:') !!}
                                        {!! Form::text('percentage',null,['class'=>'form-control']) !!}

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Add',['class'=>'btn btn-primary btn-round']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                        @else
                        <div>
                            {!! Form::model(Auth::user()->profile->sslcdata,['method'=>'PATCH','action'=>['ProfileController@updatesslc',Auth::user()->profile->sslcdata->id]]) !!}

                            <div class="form-group">

                                {!! Form::label('collage_name','School Name:') !!}
                                {!! Form::text('college_name',null,['class'=>'form-control']) !!}

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        {!! Form::label('year','Year:') !!}
                                        {!! Form::text('year',null,['class'=>'form-control']) !!}

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        {!! Form::label('percentage','Percentage:') !!}
                                        {!! Form::text('percentage',null,['class'=>'form-control']) !!}

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Update',['class'=>'btn btn-primary btn-round']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>


        {{--pu--}}

        <div class="col-md-6">
            <div class="card">
                <div class="header bg-info">
                    <h4 class="title text-center">PU</h4>
                </div>
                <div class="content">
                    @if(Auth::user()->profile->pudata == null)
                        <button class="btn btn-round btn-success btn-sm addpu" href="">ADD PU DETAILS</button>
                        <div class="puform">
                            {!! Form::open(['method'=>'POST','action'=>'ProfileController@addpu']) !!}

                            <div class="form-group">

                                {!! Form::label('collage_name','College Name:') !!}
                                {!! Form::text('college_name',null,['class'=>'form-control']) !!}

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        {!! Form::label('year','Year:') !!}
                                        {!! Form::text('year',null,['class'=>'form-control']) !!}

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        {!! Form::label('percentage','Percentage:') !!}
                                        {!! Form::text('percentage',null,['class'=>'form-control']) !!}

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Add',['class'=>'btn btn-primary btn-round']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    @else
                        <div>
                            {!! Form::model(Auth::user()->profile->pudata,['method'=>'PATCH','action'=>['ProfileController@updatepu',Auth::user()->profile->pudata->id]]) !!}

                            <div class="form-group">

                                {!! Form::label('collage_name','School Name:') !!}
                                {!! Form::text('college_name',null,['class'=>'form-control']) !!}

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        {!! Form::label('year','Year:') !!}
                                        {!! Form::text('year',null,['class'=>'form-control']) !!}

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        {!! Form::label('percentage','Percentage:') !!}
                                        {!! Form::text('percentage',null,['class'=>'form-control']) !!}

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Update',['class'=>'btn btn-primary btn-round']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{--degree--}}

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="header bg-info">
                    <h4 class="title text-center">DEGREE</h4>
                </div>
                <div class="content">
                    @if(Auth::user()->profile->degreedata == null)
                        <button class="btn btn-round btn-success btn-sm adddegree" href="">ADD DEGREE DETAILS</button>
                        <div class="degreeform">
                            {!! Form::open(['method'=>'POST','action'=>'ProfileController@adddegree']) !!}

                            <div class="form-group">

                                {!! Form::label('collage_name','College Name:') !!}
                                {!! Form::text('college_name',null,['class'=>'form-control']) !!}

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        {!! Form::label('year','Year:') !!}
                                        {!! Form::text('year',null,['class'=>'form-control']) !!}

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        {!! Form::label('percentage','Percentage:') !!}
                                        {!! Form::text('percentage',null,['class'=>'form-control']) !!}

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Add',['class'=>'btn btn-primary btn-round']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    @else
                        <div>
                            {!! Form::model(Auth::user()->profile->degreedata,['method'=>'PATCH','action'=>['ProfileController@updatepu',Auth::user()->profile->degreedata->id]]) !!}

                            <div class="form-group">

                                {!! Form::label('collage_name','School Name:') !!}
                                {!! Form::text('college_name',null,['class'=>'form-control']) !!}

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        {!! Form::label('year','Year:') !!}
                                        {!! Form::text('year',null,['class'=>'form-control']) !!}

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        {!! Form::label('percentage','Percentage:') !!}
                                        {!! Form::text('percentage',null,['class'=>'form-control']) !!}

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Update',['class'=>'btn btn-primary btn-round']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        {{--pg--}}

        <div class="col-md-6">
            <div class="card">
                <div class="header bg-info">
                    <h4 class="title text-center">PG</h4>
                </div>
                <div class="content">
                    @if(Auth::user()->profile->pgdata == null)
                        <button class="btn btn-round btn-success btn-sm addpg" href="">ADD PG DETAILS</button>
                        <div class="pgform">
                            {!! Form::open(['method'=>'POST','action'=>'ProfileController@addpg']) !!}

                            <div class="form-group">

                                {!! Form::label('collage_name','College Name:') !!}
                                {!! Form::text('college_name',null,['class'=>'form-control']) !!}

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        {!! Form::label('year','Year:') !!}
                                        {!! Form::text('year',null,['class'=>'form-control']) !!}

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        {!! Form::label('percentage','Percentage:') !!}
                                        {!! Form::text('percentage',null,['class'=>'form-control']) !!}

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Add',['class'=>'btn btn-primary btn-round']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    @else
                        <div>
                            {!! Form::model(Auth::user()->profile->pgdata,['method'=>'PATCH','action'=>['ProfileController@updatepg',Auth::user()->profile->pudata->id]]) !!}

                            <div class="form-group">

                                {!! Form::label('collage_name','School Name:') !!}
                                {!! Form::text('college_name',null,['class'=>'form-control']) !!}

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        {!! Form::label('year','Year:') !!}
                                        {!! Form::text('year',null,['class'=>'form-control']) !!}

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        {!! Form::label('percentage','Percentage:') !!}
                                        {!! Form::text('percentage',null,['class'=>'form-control']) !!}

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Update',['class'=>'btn btn-primary btn-round']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(".addsslc").click(function () {
            $(this).hide().next().show("slow");
        })
        $(".addpu").click(function () {
            $(this).hide().next().show("slow");
        })
        $(".adddegree").click(function () {
            $(this).hide().next().show("slow");
        })
        $(".addpg").click(function () {
            $(this).hide().next().show("slow");
        })
    </script>
@stop