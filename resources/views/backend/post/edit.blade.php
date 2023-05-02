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
        </div>
    </nav>

    <div class="container h-100 ">
        <div class="row justify-content-center">
            <div class="col-9 ">
                <div class="card">
                    <div class="card-header ">
                        <h3 class="text-center">Edit Note</h3>
                    </div>

                    <form action="{{ route('post.update', $result->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}

                        <div class="card-body">
                            <div class="mb-3">
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $result->title }}">
                            </div>

                            <div class="mb-3">
                                <label for="">Description</label>
                                <textarea type="text" class="form-control" rows="5" name="description">{{ $result->description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="" class="d-block">Image</label>
                                <img src="{{ asset('storage/' . $result->image) }}" alt="img" width="50px">
                                <input type="file" name="image" id="" class="form-control mt-3">
                            </div>

                            <div>
                                @if ($result->is_active == true)
                                    <input type="checkbox" name="is_active" checked />
                                @else
                                    <input type="checkbox" name="is_active" />
                                @endif
                                <label>Checkbox</label>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
