@extends('admin.layouts.layout-crud')
@section('admin-content')
    <h1 class="text-center">List Author</h1>
    <div class="container overflow-hidden text-center">
        <div class="row gy-5">
            @foreach($authors as $author)
                <div class="col-3">
                    <div class="p-3">
                        <div class="card" style="width: 200px; height: 400px;">
                            <img src="/public/storage/{{$author->img}}" class="card-img-top" alt="image not found"
                                 style="width: 200px; height: 200px;"/>
                            <div class="card-body">
                                <h5 class="card-title">{{$author->name}}</h5>
                                <div>
                                    <a href="{{route('author.edit', $author)}}" class="btn btn-primary btn-sm">edit</a>
                                    <form action="{{route('author.destroy', $author)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
