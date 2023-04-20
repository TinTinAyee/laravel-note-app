<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My todo List</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-4 bg-danger">1
                <form action="">
                    <label for="" class="text-white">Title</label>
                    <input type="text" name="title" placeholder="Enter your title..." class="form-control mb-3">
                    <label for="" class="text-white">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control mb-3">Description....</textarea>
                    <div>
                        <input type="submit" value="Create" class="btn btn-primary mb-3">
                    </div>
                </form>
            </div>
            <div class="col-8 bg-warning">2</div>
        </div>
    </div>
</body>

</html>
