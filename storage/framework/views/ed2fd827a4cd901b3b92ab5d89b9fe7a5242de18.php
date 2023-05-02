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
    <h1 class="text-center">This is customer home page!</h1>
    <div class="container">

        <a href="<?php echo e(route('customer.create')); ?> " class="btn btn-success">Create</a>

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
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->address); ?></td>
                        <td><?php echo e($item->phone); ?></td>
                        <td>
                            <a href="<?php echo e(route('customer.edit', $item->id)); ?>" class="btn btn-primary">Edit</a>
                            <a href="<?php echo e(route('customer.view', $item->id)); ?>" class="btn btn-warning">view</a>
                            <form action="<?php echo e(route('customer.delete', $item->id)); ?>" class="d-inline" method="POST">
                                <?php echo csrf_field(); ?>
                                
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>

        </table>
        <div>
            
        </div>
    </div>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Laravel_Talent_Program\sample-app\resources\views/backend/customer/home.blade.php ENDPATH**/ ?>