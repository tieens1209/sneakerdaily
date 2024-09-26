<?php $__env->startSection('javascript'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid px-4">
    <div class="row mt-3">
        <form class="form-add-cate" method="post" class="form-control" action="<?php echo e(route('admin.size.add')); ?>">
            <?php echo method_field('POST'); ?>
            <?php echo csrf_field(); ?>
            <!-- Name input -->
            <div class="form-outline mb-4">
            <label class="form-label" for="form5Example2">Name size: </label>  
            <input type="text" name="name" id="name" class="form-control" />
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger error_name"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <!-- Icon input -->
            <div class="form-outline mb-4">
            <label class="form-label" for="form5Example1">Description size: </label>  
            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
            <p class="text-danger error_icon"></p>
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" onclick="return true">Add size</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ndm10\Desktop\WEB4013 - Lap trinh PHP3\Lab\Assignment\PRJ-MFashion\resources\views/admin/size/add.blade.php ENDPATH**/ ?>