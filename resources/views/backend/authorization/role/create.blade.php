@extends('backend.layout.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="d-flex mt-3">
                    <h3>Create Role</h3>
                    <a href="{{ route('role.index') }}" class="btn btn-primary ml-auto">BACK</a>
                </div>

                <form method="POST" action="{{ route('role.store') }}">
                    @csrf
                    <div class="py-2">
                        <label for="name"> Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Enter your name..."
                            value="{{ old('name') }}" />

                        @if ($errors->has('name'))
                            <div class="error text-danger">{{ $errors->first('name') }}</div>
                        @endif

                    </div>

                    <div class="py-2">
                        <h3> Permissions</h3>

                        <div class="grid grid-cols-4 gap-4">

                            @foreach ($permission as $mission)
                                <div class="col-span-4 sm:col-span-2 md:col-span-1">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="permissions[]" value="{{ $mission->id }}">
                                        {{ $mission->name }}
                                    </label>
                                </div>
                            @endforeach

                            @if ($errors->has('permissions'))
                                <div class="error text-danger">{{ $errors->first('permissions') }}</div>
                            @endif
                        </div>

                    </div>

                    <div class="row mb-0">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
