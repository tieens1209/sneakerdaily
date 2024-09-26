<?php $__env->startSection('content'); ?>
<div class="container-fluid px-4">
    <div class="card mb-4 mt-4">
        <div class="card-header">
            <div>
                <i class="fas fa-table me-1"></i>
                Size Table
            </div>
            <a href="<?php echo e(route('admin.size.add')); ?>" class="btn btn-outline-success px-3 mt-2">Add</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name size</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    ?>
                    <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($i); ?></td>
                        <td><?php echo e($size->name); ?></td>
                        <td>
                            <form action="<?php echo e(route('admin.size.delete', $size->id)); ?>" method="post">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                                <a class="btn btn-outline-warning px-3 mb-0" href="<?php echo e(route('admin.size.edit',$size->id)); ?>">Edit</a>
                                <button type="submit" class="btn btn-outline-danger text-gradient px-3 mb-0" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                    $i++;
                    ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ndm10\Desktop\WEB4013 - Lap trinh PHP3\Lab\Assignment\PRJ-MFashion\resources\views/admin/size/list.blade.php ENDPATH**/ ?>