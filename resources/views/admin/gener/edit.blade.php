@extends('admin.layouts.layout')
@section('admin-content')
    <h1 class="text-center">Edit Author</h1>
    <form action="{{route('author.update', $author)}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input value="{{$author->name}}" type="text" class="form-control" name="name">
            <div  class="form-text"></div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
