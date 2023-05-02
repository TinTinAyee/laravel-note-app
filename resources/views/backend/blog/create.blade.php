@extends('backend.layout.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 ">
                    <a href="{{ route('blog.index') }}" class="text-decoration-none font-weight-bold">
                        <i class="fa-solid fa-arrow-left p-2"></i>Back</a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">DataCreate</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3>Create Data</h3>
                    </div>

                    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            @csrf
                            {{-- {{ method_field('PATCH') }} --}}

                            <div class="mb-3">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                @if ($errors->has('name'))
                                    <div class="error text-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Description..">
                                @if ($errors->has('description'))
                                    <div class="error text-danger">{{ $errors->first('description') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1">Image</label>
                                <input type="file" name="image" class="form-control">
                                @if ($errors->has('image'))
                                    <div class="error text-danger">{{ $errors->first('image') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1">Author</label>
                                <select name="author_id" id="" class="form-control">

                                    @foreach ($authors as $author)
                                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                                    @endforeach

                                </select>

                                @if ($errors->has('author_id'))
                                    <div class="error text-danger">{{ $errors->first('author_id') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                {{-- <input type="checkbox" name="name" id="">
                                <label for="">Active</label> --}}

                                <input type="radio" id="option1" name="status" value="1">
                                <label class="mr-3">Active</label>

                                <input type="radio" id="option2" name="status" value="0">
                                <label>No Active</label>

                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
