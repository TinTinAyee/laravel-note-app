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
                        <li class="breadcrumb-item active">DataShow</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Author</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $blog->id }}</th>
                            <td>{{ $blog->name }}</td>
                            <td>{{ $blog->description }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="img" width="50px">
                            </td>
                            <td>{{ $blog->author->name }}</td>

                            {{-- using radio button for show active or not active in status columm --}}

                            <td>
                                @if ($blog->status == true)
                                    <span class="badge badge-info">Active</span>
                                @else
                                    <span class="badge badge-warning">Not Active</span>
                                @endif
                            </td>

                            {{-- using checkbox for show active or not active in status columm --}}

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
