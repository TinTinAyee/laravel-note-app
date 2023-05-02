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
    <div class="container">
        <h1 class="text-center">Update customer data</h1>
        <div class="card-body">
            <form action="<?php echo e(route('customer.update', $result->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                

                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name"
                    value="<?php echo e($result->name); ?>" required><br>

                <label for="">Address</label>
                <textarea name="address" class="form-control" cols="30" rows="10" placeholder="Enter your address" required><?php echo e($result->address); ?></textarea><br>

                <label for="">Phone</label>
                <input type="number" class="form-control" name="phone" placeholder="eg.09777777"
                    value="<?php echo e($result->phone); ?>" required><br>

                <input type="submit" class="btn btn-success" value="Update">
            </form>
        </div>
    </div>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Laravel_Talent_Program\sample-app\resources\views/backend/customer/edit.blade.php ENDPATH**/ ?>