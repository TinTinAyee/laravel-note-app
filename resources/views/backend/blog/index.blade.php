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
                            <div class="card-header">
                                <a href="{{ route('blog.create') }}" class="btn btn-primary">Add New</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
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
                                                    <a href="{{ route('blog.edit', $val->id) }}" class="btn btn-primary">Edit</a>

                                                    <a href="{{ route('blog.show', $val->id) }}" class="btn btn-success">view</a>

                                                    <form action="{{ route('blog.destroy', $val->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        {{-- @method('DELETE') --}}
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm('{{ 'Are you sure you want to delete ?' }}')">Delete</button>
                                                    </form>
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
