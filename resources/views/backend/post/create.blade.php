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

    <div class="container h-100 ">
        <div class="row justify-content-center">
            <div class="col-9 ">
                <div class="card">
                    <div class="card-header ">
                        <h3 class="text-center">Create Post</h3>
                    </div>

                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="title" value=""
                                    placeholder="Enter your title" required>
                            </div>

                            <div class="mb-3">
                                <label for="">Description</label>
                                <textarea type="text" class="form-control" rows="5" name="description" placeholder="Description...."
                                    value="" required></textarea>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1">Image</label>
                                <input type="file" name="image" class="form-control">
                                @if ($errors->has('image'))
                                    <div class="error text-danger">{{ $errors->first('image') }}</div>
                                @endif
                            </div>
                            <div>
                                <input type="checkbox" name="is_active" id="">
                                <label>Checkbox</label>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary" vlaue="">Sumbit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
