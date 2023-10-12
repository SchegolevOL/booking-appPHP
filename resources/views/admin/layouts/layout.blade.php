<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/assets/bootstrap-5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="{{route('book.index')}}">Book</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('author.index')}}">Author</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
    </ul>
    <div class="mt-5">
        @yield('admin-content')
    </div>

</div>
</body>
</html>
<script src="/public/assets/bootstrap-5.3.2/dist/js/bootstrap.js"></script>
