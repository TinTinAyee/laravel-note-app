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
        </div>
    </nav>

    <div class="container h-100 ">
        <div class="row justify-content-center">
            <div class="col-9 ">
                <div class="card">
                    <div class="card-header ">
                        <h3 class="text-center">Edit Note</h3>
                    </div>

                    <form action="<?php echo e(route('post.update', $result->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('PATCH')); ?>


                        <div class="card-body">
                            <div class="mb-3">
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="title" value="<?php echo e($result->title); ?>">
                            </div>

                            <div class="mb-3">
                                <label for="">Description</label>
                                <textarea type="text" class="form-control" rows="5" name="description"><?php echo e($result->description); ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="" class="d-block">Image</label>
                                <img src="<?php echo e(asset('storage/' . $result->image)); ?>" alt="img" width="50px">
                                <input type="file" name="image" id="" class="form-control mt-3">
                            </div>

                            <div>
                                <?php if($result->is_active == true): ?>
                                    <input type="checkbox" name="is_active" checked />
                                <?php else: ?>
                                    <input type="checkbox" name="is_active" />
                                <?php endif; ?>
                                <label>Checkbox</label>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_Talent_Program\sample-app\resources\views/backend/post/edit.blade.php ENDPATH**/ ?>