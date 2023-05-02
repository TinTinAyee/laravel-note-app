<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="d-flex mt-3">
                    <h3>Create Role</h3>
                    <a href="<?php echo e(route('role.index')); ?>" class="btn btn-primary ml-auto">BACK</a>
                </div>

                <form method="POST" action="<?php echo e(route('role.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="py-2">
                        <label for="name"> Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Enter your name..."
                            value="<?php echo e(old('name')); ?>" />

                        <?php if($errors->has('name')): ?>
                            <div class="error text-danger"><?php echo e($errors->first('name')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="py-2">
                        <h3> Permissions</h3>

                        <div class="grid grid-cols-4 gap-4">

                            <?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-span-4 sm:col-span-2 md:col-span-1">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="permissions[]" value="<?php echo e($mission->id); ?>">
                                        <?php echo e($mission->name); ?>

                                    </label>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php if($errors->has('permissions')): ?>
                                <div class="error text-danger"><?php echo e($errors->first('permissions')); ?></div>
                            <?php endif; ?>
                        </div>

                    </div>

                    <div class="row mb-0">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_Talent_Program\sample-app\resources\views/backend/authorization/role/create.blade.php ENDPATH**/ ?>