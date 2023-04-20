<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 bg-body rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('post.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" aria-current="page" href="{{ route('post.create') }}">Create</a>
                    </li>
                </ul>
            </div>

            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="30"
                alt="Black and White Portrait of a Man" loading="lazy" />
        </div>
    </nav>

    <div class="container">
        <h1>Post Lists</h1>
        <div class="row">
            <div class="col">
                @foreach ($data as $val)
                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">{{ $val->title }}</h3>
                                <h6 class="card-text text-danger font-weight-bold">is_active : {{ $val->is_active }}
                                </h6>
                            </div>
                            <p class="card-text">{{ $val->description }}</p>
                        </div>
                        <div class="card-footer d-flex">
                            <a href="{{ route('post.edit', $val->id) }}" class="btn btn-primary ">Edit</a>
                            <a href="{{ route('post.show', $val->id) }}" class="btn btn-success ml-1">View</a>
                            <form action="{{ route('post.destroy', $val->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger ml-1"
                                    onclick="return confirm('{{ 'Are you sure you want to delete ?' }}')">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>


    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
