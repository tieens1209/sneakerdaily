<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Brand</h5>
                    <a href="<?php echo e(route('brand.create')); ?>"><button type="submit" class="btn btn-success m-1">Add</button></a>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0"></h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Name</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Quantity</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Action</h6>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $stt = 1;
                            ?>
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo e($stt); ?></h6></td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo e($brand->name); ?></p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">200</p>
                                </td>
                                <td class="border-bottom-0" style="display: flex;">
                                    <a href=""><button type="submit" class="btn btn-info m-1">Update</button></a>
                                    <form action="" method="post">
                                        <?php echo method_field('POST'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger m-1">Delete</button>
                                    </form>
                                </td>
                            </tr> 
                            <?php
                                $stt++;
                            ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ndm10\Desktop\WEB4013 - Lap trinh PHP3\Lab\Assignment\PRJ-MFashion\resources\views/admin/brand/list.blade.php ENDPATH**/ ?>