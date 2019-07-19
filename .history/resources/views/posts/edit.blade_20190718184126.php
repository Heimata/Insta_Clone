@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="patch">
    @csrf
    @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit Profile</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Title</label>

                    <input id="caption"
                            type="text" 
                            class="form-control @error('caption') is-invalid @enderror"
                            name="caption" 
                            value="{{ old('caption') }}" 
                            required autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Title</label>

                    <input id="description"
                            type="text" 
                            class="form-control @error('description') is-invalid @enderror"
                            name="description" 
                            value="{{ old('description') }}" 
                            required autocomplete="description" autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                        <!-- <span class="invalid-feedback" role="alert"> // A supprimer -->
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Post</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
