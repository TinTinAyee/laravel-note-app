@extends('backend.layout.master')
@section('content')
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
        <h1>Show Post</h1>
        <div class="row">
            <div class="col">
                <div class="card shadow bg-white rounded">
                    <div class="card-header">
                        <h3 class="card-title">{{ $result->title }}</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $result->description }}</p>

                        <img src="{{ asset('storage/' . $result->image) }}" alt="img" width="50px">

                        <p class="card-text text-danger font-weight-bold mt-3">is_active : {{ $result->is_active }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
