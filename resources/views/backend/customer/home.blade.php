<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <h1 class="text-center">This is customer home page!</h1>
    <div class="container">

        <a href="{{ route('customer.create') }} " class="btn btn-success">Create</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>
                            <a href="{{ route('customer.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('customer.view', $item->id) }}" class="btn btn-warning">view</a>
                            <form action="{{ route('customer.delete', $item->id) }}" class="d-inline" method="POST">
                                @csrf
                                {{-- @method('DELETE') --}}
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
        <div>
            {{-- {{$data->links()}} --}}
        </div>
    </div>

</body>

</html>
