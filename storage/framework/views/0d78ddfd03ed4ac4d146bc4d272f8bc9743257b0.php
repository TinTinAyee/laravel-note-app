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
                        <li class="breadcrumb-item active">Data Edit</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3>Edit Blog</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('blog.update', $blog->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            

                            <div class="mb-3">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo e($blog->name); ?>">
                                <?php if($errors->has('name')): ?>
                                    <div class="error text-danger"><?php echo e($errors->first('name')); ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1">Description</label>
                                <input type="text" name="description" class="form-control"
                                    value="<?php echo e($blog->description); ?>">
                                <?php if($errors->has('description')): ?>
                                    <div class="error text-danger"><?php echo e($errors->first('description')); ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1">Image</label>
                                <input type="file" name="image" class="form-control">

                                <?php if($errors->has('image')): ?>
                                    <div class="error text-danger"><?php echo e($errors->first('image')); ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1">Author</label>
                                <select name="author_id" id="" class="form-control">
                                    <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($author->id); ?>"
                                            <?php echo e($blog->author_id == $author->id ? 'selected' : ''); ?>>
                                            <?php echo e($author->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                <?php if($errors->has('author_id')): ?>
                                    <div class="error text-danger"><?php echo e($errors->first('author_id')); ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="mb-3">
                                

                                <input type="radio" id="option2" name="status" value="1"
                                    <?php echo e($blog->status == true ? 'checked' : ''); ?>>
                                <label class="mr-3">Active</label>

                                <input type="radio" id="option1" name="status" value="0"
                                    <?php echo e($blog->status == false ? 'checked' : ''); ?>>
                                <label>Not Active</label>

                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_Talent_Program\sample-app\resources\views/backend/blog/edit.blade.php ENDPATH**/ ?>