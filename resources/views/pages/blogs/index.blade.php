@extends('layouts.app')

@section('content')
<h1 class="mt-4 display-4 text-center">List All Blogs</h1>
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{Session::get('success')}}
</div>
@endif
<table class="table table-striped mt-4">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Summary</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @forelse ($blogs as $blog)
            <td>{{ $blog->id }}</td>
            <td><a href="{{route('blogs.show', ['blog' => $blog])}}">{{ $blog->title }}</a></td>
            <td>{{ $blog->summary }}</td>
            <td><a href="{{route('blogs.edit', ['blog' => $blog])}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{route('blogs.destroy', ['blog' => $blog])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="delete_button" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5">No Result Found</td>
        </tr>
        @endforelse
        <tr>

    </tbody>
</table>
@endsection