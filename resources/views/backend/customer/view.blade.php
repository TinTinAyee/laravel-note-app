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
    <h1 class="text-center">Show customer data</h1>
    <div class="container">

        <a href="{{ route('customer.home') }} " class="btn btn-success">Back</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->address }}</td>
                    <td>{{ $data->phone }}</td>
                </tr>
            </tbody>

        </table>
    </div>
</body>

</html>
