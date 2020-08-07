@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add New Post</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                    <input 
                        id="caption" type="text" 
                        class="form-control @error('caption') is-invalid @enderror" 
                        name="caption" value="{{ old('name') }}"  autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Select Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                        <!-- <span class="invalid-feedback" role="alert"> -->
                            <strong style="color: red;">{{ $message }}</strong>
                        <!-- </span> -->
                    @enderror
                </div>
                <div class="row">
                    <button class="btn-primary btn mt-3">Add New Post</button>
                </div>
            </div>
        </div>
    </form>
</div>

</div>
@endsection
