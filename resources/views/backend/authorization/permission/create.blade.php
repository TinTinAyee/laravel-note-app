@extends('backend.layout.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary">Create Permission</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('permission.store') }}">
                            @csrf
                            <div class="row mb-3">
                                <label class="">Name</label>

                                <div class="">
                                    <input type="text" class="form-control" name="name" required
                                        placeholder="enter your permission">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="">
                                    <button type="submit" class="btn btn-primary">
                                        Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
