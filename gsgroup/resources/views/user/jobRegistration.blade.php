@extends('layouts.app')

@section('content')
@include('includes.nav-d')
<div class="container" style="margin-top: 60px;">
    <div class="row justify-content-center">
        <div class="col-sm-8 card shadow-lg">
            <form method="POST" action="/job-registration" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h3 class="text-center mt-5">Job Registration</h3>
                <div class="form-group">
                    <label>Job Function</label>
                    <select name="job_type" class="form-control @error('job_type') is-invalid @enderror" value="{{ old('job_type') }}">
                        <option value="Accounting">Accounting</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Sales">Sales</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Electrical">Electrical</option>
                    </select>
                    @error('job_type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Experience Month/Year</label>
                    <input type="text" name="experience" class="form-control @error('experience') is-invalid @enderror" value="{{ old('experience') }}">
                    @error('experience')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Current working location</label>
                    <input type="location" name="working_location" class="form-control @error('working_location') is-invalid @enderror" value="{{ old('working_location') }}">
                    @error('working_location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Upload Resume</label>
                    <input type="file" class="form-control @error('resume') is-invalid @enderror" name="resume" value="{{ old('resume') }}">
                    @error('resume')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Upload Passport Image</label>
                    <input type="file" class="form-control @error('passport_image') is-invalid @enderror" name="passport_image" value="{{ old('passport_image') }}">
                    @error('passport_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Upload Highest Education Certificate</label>
                    <input type="file" class="form-control @error('education_certificate') is-invalid @enderror" name="education_certificate" value="{{ old('education_certificate') }}">
                    @error('education_certificate')
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
