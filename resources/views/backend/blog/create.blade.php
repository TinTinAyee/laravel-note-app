@extends('backend.layout.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Blog Manully</h1>
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
                    <div class="card-body">
                        <form action="{{ route('blog.store') }}" method="POST">
                            @csrf

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

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
