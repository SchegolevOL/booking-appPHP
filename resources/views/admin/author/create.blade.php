@extends('admin.layouts.layout')
@section('admin-content')
    <h1 class="text-center">Create Author</h1>
    <form action="{{route('author.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="name">
            <div  class="form-text"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Years</label>
            <input type="text" class="form-control" name="years">
            <div  class="form-text"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" class="form-control" name="img">
            <div  class="form-text"></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

