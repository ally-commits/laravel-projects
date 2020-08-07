@extends('layouts.app')

@section('content')
@include('includes.nav-d')
<div class="container" style="margin-top: 60px;">
    <div class="row justify-content-center">
        <div class="col-sm-8 card shadow-lg">
            <form method="POST" action="/event-registration" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h3 class="text-center mt-5">Event Registration</h3>
                
                <div class="form-group">
                    <label for="">Kind of Event</label>
                    <input type="text" name="event_kind" class="form-control @error('event_kind') is-invalid @enderror" value="{{ old('event_kind') }}">
                    @error('event_kind')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Location</label>
                    <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" value="{{ old('location') }}">
                    @error('location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>(Indoor /Outdoor)</label>
                    <select name="door" class="form-control @error('door') is-invalid @enderror" value="{{ old('door') }}">
                        <option value="Outdoor">Outdoor</option>
                        <option value="Indoor">Indoor</option> 
                    </select>
                    @error('door')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Enter Date</label>
                    <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}">
                    @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>(Day /Night)</label>
                    <select name="day_night" class="form-control @error('day_night') is-invalid @enderror" value="{{ old('day_night') }}">
                        <option value="Day">Day</option>
                        <option value="Night">Night</option> 
                    </select>
                    @error('day_night')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="">Crowd: </label>
                    <input type="number" name="crowd" class="form-control @error('crowd') is-invalid @enderror" value="{{ old('crowd') }}">
                    @error('crowd')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                

                <div class="form-group @error('desscription') is-invalid @enderror">
                    <label>Enter Your Message</label>
                    <textarea rows="4"name="description" placeholder="Enter your Name" value="{{ old('description') }}"class="form-control @error('description') is-invalid @enderror">
                    
                    </textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" value="submit" name="Register">
                </div>
            </form>  
        </div>
    </div>
</div>
@endsection
