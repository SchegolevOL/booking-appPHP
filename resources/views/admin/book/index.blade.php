@extends('admin.layouts.layout-crud')
@section('admin-content')

    <ul class="nav justify-content-center">
        <li>
            <a class="nav-link" href="{{route('book.create')}}">Create</a>
        </li>
        <li>
            <a class="nav-link" href="{{route('book.index')}}">Index</a>
        </li>
    </ul>


    <h1 class="text-center">List Author</h1>




            <div class="container overflow-hidden text-center">
                <div class="row gy-5">
                    @foreach($books as $book)
                    <div class="col-3">
                        <div class="p-3">
                            <div class="card" style="width: 800px; height: 400px;">
                                <img src="{{$book->img}}" class="card-img-top" alt="image not found" style="width: 200px; height: 200px;"/>
                                <div class="card-body">
                                    <p>{{$book->summary}}</p>
                                    <h3>{{$book->author->name}}</h3>
                                    <h5 class="card-title">{{$book->title}}</h5>

                                    <div>
                                        <a href="{{route('book.edit', $book)}}" class="btn btn-primary btn-sm">edit</a>
                                        <form action="{{route('book.destroy', $book)}}" method="post">
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
