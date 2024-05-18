@extends('layouts.app')

@section('content')
<h1 class="mt-4 display-4 text-center">Single Blog</h1>
@if (Session::has('success'))
<div class="alert alert-success mt-4" role="alert">
    {{Session::get('success')}}
</div>
@endif
<table class="table table-striped mt-4">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Summary</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $blog->id }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->summary }}</td>
        </tr>

    </tbody>
</table>
@endsection