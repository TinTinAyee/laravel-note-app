@extends('backend.layout.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Blog Manully</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Data Edit</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3>Edit Blog</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('blog.update', $blog->id) }}" method="POST">
                            @csrf
                            {{-- {{ method_field('PATCH') }} --}}

                            <div class="mb-3">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $blog->name }}">
                                @if ($errors->has('name'))
                                    <div class="error text-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1">Description</label>
                                <input type="text" name="description" class="form-control"
                                    value="{{ $blog->description }}">
                                @if ($errors->has('description'))
                                    <div class="error text-danger">{{ $errors->first('description') }}</div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
