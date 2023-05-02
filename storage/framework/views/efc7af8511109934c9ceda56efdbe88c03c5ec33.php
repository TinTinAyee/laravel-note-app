<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Table</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin')); ?>">Home</a></li>
                        <li class="breadcrumb-item active">DataTable</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <div class="container">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header d-flex">
                                <h4>DataTable with havor</h4>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blogCreate')): ?>
                                    <a href="<?php echo e(route('blog.create')); ?>" class="btn btn-primary ml-auto">Add New</a>
                                <?php endif; ?>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th scope="row"><?php echo e($val->id); ?></th>
                                                <td><?php echo e($val->name); ?></td>
                                                <td><?php echo e($val->description); ?></td>
                                                <td>
                                                    <img src="<?php echo e(asset('storage/' . $val->image)); ?>" alt="img"
                                                        width="50px">
                                                </td>
                                                <td><?php echo e($val->author->name); ?></td>
                                                <td>
                                                    <?php if($val->status == true): ?>
                                                        <span class="badge badge-info">Active</span>
                                                    <?php else: ?>
                                                        <span class="badge badge-warning">Not Active</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blogEdit')): ?>
                                                        <a href="<?php echo e(route('blog.edit', $val->id)); ?>"
                                                            class="btn btn-primary">Edit</a>
                                                    <?php endif; ?>

                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blogShow')): ?>
                                                        <a href="<?php echo e(route('blog.show', $val->id)); ?>"
                                                            class="btn btn-success">view</a>
                                                    <?php endif; ?>

                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blogDelete')): ?>
                                                        <form action="<?php echo e(route('blog.destroy', $val->id)); ?>" method="POST"
                                                            class="d-inline">
                                                            <?php echo csrf_field(); ?>
                                                            
                                                            <button class="btn btn-danger"
                                                                onclick="return confirm('<?php echo e('Are you sure you want to delete ?'); ?>')">Delete</button>
                                                        </form>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                                
                                <div class="mt-3">
                                    
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_Talent_Program\sample-app\resources\views/backend/blog/index.blade.php ENDPATH**/ ?>