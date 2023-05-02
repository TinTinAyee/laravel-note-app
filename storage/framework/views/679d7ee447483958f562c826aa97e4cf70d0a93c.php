<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="">
    <div class="container mt-5">
        <h1>New Blog Manually</h1>

        <form action="<?php echo e(route('blogs.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name">
                <?php if($errors->has('name')): ?>
                    <div class="error text-danger"><?php echo e($errors->first('name')); ?></div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" name="description" class="form-control" placeholder="Description..">
                <?php if($errors->has('description')): ?>
                    <div class="error text-danger"><?php echo e($errors->first('description')); ?></div>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    </div>

    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Laravel_Talent_Program\sample-app\resources\views/blogs/create.blade.php ENDPATH**/ ?>