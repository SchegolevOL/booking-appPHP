@extends('admin.layouts.layout')
@section('admin-content')
    <h1 class="text-center">Create book</h1>
    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
            <div  class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Summary</label>
            <textarea class="form-control" name="summary" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Author</label>
            <select class="form-select" aria-label="Default select example" name="author">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Genre : </label>
            <input type="checkbox" class="btn-check" name="options-base" id="option5" autocomplete="off" checked>
            <label class="btn" for="option5">Checked</label>

            <input type="checkbox" class="btn-check" name="options-base" id="option6" autocomplete="off">
            <label class="btn" for="option6">Radio</label>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
