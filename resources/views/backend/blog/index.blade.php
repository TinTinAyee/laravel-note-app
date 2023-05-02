@extends('backend.layout.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Table</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">DataTable</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <div class="container">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header d-flex">
                                <h4>DataTable with havor</h4>

                                @can('blogCreate')
                                    <a href="{{ route('blog.create') }}" class="btn btn-primary ml-auto">Add New</a>
                                @endcan

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $val)
                                            <tr>
                                                <th scope="row">{{ $val->id }}</th>
                                                <td>{{ $val->name }}</td>
                                                <td>{{ $val->description }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $val->image) }}" alt="img"
                                                        width="50px">
                                                </td>
                                                <td>{{ $val->author->name }}</td>
                                                <td>
                                                    @if ($val->status == true)
                                                        <span class="badge badge-info">Active</span>
                                                    @else
                                                        <span class="badge badge-warning">Not Active</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @can('blogEdit')
                                                        <a href="{{ route('blog.edit', $val->id) }}"
                                                            class="btn btn-primary">Edit</a>
                                                    @endcan

                                                    @can('blogShow')
                                                        <a href="{{ route('blog.show', $val->id) }}"
                                                            class="btn btn-success">view</a>
                                                    @endcan

                                                    @can('blogDelete')
                                                        <form action="{{ route('blog.destroy', $val->id) }}" method="POST"
                                                            class="d-inline">
                                                            @csrf
                                                            {{-- @method('DELETE') --}}
                                                            <button class="btn btn-danger"
                                                                onclick="return confirm('{{ 'Are you sure you want to delete ?' }}')">Delete</button>
                                                        </form>
                                                    @endcan
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{-- Pagination --}}
                                <div class="mt-3">
                                    {{-- <p>Showing 1 to 3 of 57 entries</p> --}}
                                    {{-- {{ $data->links() }} --}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
