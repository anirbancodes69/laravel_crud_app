@extends('layouts.app')

@section('content')
<h1 class="mt-4 display-4 text-center">Create Blog</h1>
<form action="{{route('blogs.store')}}" method="POST" class="form" class="mt-4">
    @csrf
    <div class="form-group mt-4">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
        @error('title')

        <div class="alert alert-danger mt-4" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="form-group mt-4">
        <label for="summary">Summary</label>
        <input type="text" name="summary" id="summary" class="form-control" value="{{old('summary')}}">
        @error('summary')
        <div class="alert alert-danger mt-4" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="form-groupmt-4">
        <label for="content">Content</label>
        <input type="text" name="content" id="content" class="form-control" value="{{old('content')}}">
        @error('content')
        <div class="alert alert-danger mt-4" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <input type="submit" name="add_blog" class="btn btn-success mt-4">
</form>
@endsection