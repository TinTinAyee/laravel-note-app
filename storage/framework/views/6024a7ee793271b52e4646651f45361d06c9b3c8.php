<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary">Create Permission</div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('permission.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row mb-3">
                                <label class="">Name</label>

                                <div class="">
                                    <input type="text" class="form-control" name="name" required
                                        placeholder="enter your permission">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="">
                                    <button type="submit" class="btn btn-primary">
                                        Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_Talent_Program\sample-app\resources\views/backend/authorization/permission/create.blade.php ENDPATH**/ ?>