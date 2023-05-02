<?php $__env->startSection('content'); ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 bg-body rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('post.index')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" aria-current="page" href="<?php echo e(route('post.create')); ?>">Create</a>
                    </li>
                </ul>
            </div>

            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="30"
                alt="Black and White Portrait of a Man" loading="lazy" />
        </div>
    </nav>

    <div class="container">
        <h1>Post Lists</h1>
        <div class="row">
            <div class="col">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title"><?php echo e($val->title); ?></h3>

                                

                                <h6 class="card-text font-weight-bold">Status :

                                    <?php if($val->is_active == true): ?>
                                        <label for="" class="badge badge-success">Active</label>
                                    <?php else: ?>
                                        <label for="" class="badge badge-danger">Not Active</label>
                                    <?php endif; ?>
                                </h6>
                            </div>
                            <p class="card-text"><?php echo e($val->description); ?></p>

                            <img src="<?php echo e(asset('storage/' . $val->image)); ?>" alt="image" width="50px">

                        </div>
                        <div class="card-footer d-flex">
                            <a href="<?php echo e(route('post.edit', $val->id)); ?>" class="btn btn-primary ">Edit</a>
                            <a href="<?php echo e(route('post.show', $val->id)); ?>" class="btn btn-success ml-1">View</a>
                            <form action="<?php echo e(route('post.destroy', $val->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger ml-1"
                                    onclick="return confirm('<?php echo e('Are you sure you want to delete ?'); ?>')">Delete</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_Talent_Program\sample-app\resources\views/backend/post/index.blade.php ENDPATH**/ ?>