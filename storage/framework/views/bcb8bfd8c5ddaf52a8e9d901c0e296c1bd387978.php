<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
</head>

<body>
    <h1 class="text-center">Show customer data</h1>
    <div class="container">

        <a href="<?php echo e(route('customer.home')); ?> " class="btn btn-success">Back</a>

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
                    <td><?php echo e($data->id); ?></td>
                    <td><?php echo e($data->name); ?></td>
                    <td><?php echo e($data->address); ?></td>
                    <td><?php echo e($data->phone); ?></td>
                </tr>
            </tbody>

        </table>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Laravel_Talent_Program\sample-app\resources\views/backend/customer/view.blade.php ENDPATH**/ ?>