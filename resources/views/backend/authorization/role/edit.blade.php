@extends('backend.layout.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <h3>Edit Role</h3>

                <form method="POST" action="{{ route('role.update', $role->id) }}">
                    @csrf
                    {{ method_field('PATCH') }}

                    <div class="py-2">
                        <label for="name"> Name</label>
                        <input id="name" class="form-control" type="text" name="name" value="{{ $role->name }}" />

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
                                        <input type="checkbox" name="permissions[]" value="{{ $mission->id }}"
                                            {{ $role->haspermissionTo($mission->id) ? 'checked' : '' }}>
                                        {{ $mission->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>

                        @if ($errors->has('permissions'))
                            <div class="error text-danger">{{ $errors->first('permissions') }}</div>
                        @endif
                    </div>

                    <div class="row mb-0">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
