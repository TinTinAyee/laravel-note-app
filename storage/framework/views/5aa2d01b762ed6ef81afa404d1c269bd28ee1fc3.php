<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 ">
                    <a href="<?php echo e(route('blog.index')); ?>" class="text-decoration-none font-weight-bold">
                        <i class="fa-solid fa-arrow-left p-2"></i>Back</a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('blog.index')); ?>">Home</a></li>
                        <li class="breadcrumb-item active">DataShow</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Author</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo e($blog->id); ?></th>
                            <td><?php echo e($blog->name); ?></td>
                            <td><?php echo e($blog->description); ?></td>
                            <td>
                                <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" alt="img" width="50px">
                            </td>
                            <td><?php echo e($blog->author->name); ?></td>

                            

                            <td>
                                <?php if($blog->status == true): ?>
                                    <span class="badge badge-info">Active</span>
                                <?php else: ?>
                                    <span class="badge badge-warning">Not Active</span>
                                <?php endif; ?>
                            </td>

                            

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_Talent_Program\sample-app\resources\views/backend/blog/view.blade.php ENDPATH**/ ?>