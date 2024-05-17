@extends('layouts.app')

@section('content')
<h1 class="mt-4 display-4 text-center">Edit Blog</h1>

<form action="{{route('blogs.update', ['blog' => $blog])}}" class="mt-4" method="POST" class="form">
    @csrf
    @method('PUT')
    <div class="form-group mt-4">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{$blog->title}}">
        @error('title')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="form-group mt-4">
        <label for="summary">Summary</label>
        <input type="text" name="summary" id="summary" class="form-control" value="{{$blog->summary}}">
        @error('summary')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="form-group mt-4">
        <label for="content">Content</label>
        <input type="text" name="content" id="content" class="form-control" value="{{$blog->content}}">
        @error('content')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <input type="submit" name="edit_blog" class="btn btn-success mt-4">
</form>
@endsection