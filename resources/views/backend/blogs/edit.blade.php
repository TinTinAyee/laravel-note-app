<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="">
    <div class="container mt-5">
        <h1>Edit Blog</h1>

        <form action="{{ route('blogs.update', $result->id) }}" method="POST">
            @csrf
            {{ method_field('PATCH') }}

            <div class="mb-3">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $result->name }}">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" name="description" class="form-control" value="{{ $result->description }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
