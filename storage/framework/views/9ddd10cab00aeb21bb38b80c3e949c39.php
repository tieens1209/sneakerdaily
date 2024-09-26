<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4 mt-5">Product</h5>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('addProduct')): ?>
                    <a href="<?php echo e(route('product.create')); ?>"><button type="submit" class="btn btn-success m-1">Add</button></a>
                    <?php endif; ?>
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
                                <h6 class="fw-semibold mb-0">Image</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Quantity</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Size</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Price</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Category</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Brand</h6>
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
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo e($stt); ?></h6></td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo e($product->name); ?></p>
                                </td>
                                <td class="border-bottom-0">
                                    <img src="<?php echo e(asset('storage/images/products/'.$product->image->srcImage)); ?>" width="50" height="68" alt="">
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo e($product->number); ?></p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo e($product->sizeShow); ?></p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">$<?php echo e($product->priceSale); ?> <del style="font-size: 12px">$<?php echo e($product->price); ?></del></p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo e($product->category->name); ?></p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo e($product->brand->name); ?></p>
                                </td>
                                <td class="border-bottom-0" style="display: flex;  padding-top:30px;">
                                    <?php if(is_null($product->deleted_at)): ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('updateProduct')): ?>
                                    <a href="<?php echo e(route('product.edit', $product->id)); ?>"><button type="submit" class="btn btn-info m-1">Update</button></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('deleteProduct')): ?>
                                    <form action="<?php echo e(route('product.destroy', $product->id)); ?>" method="post">
                                        <?php echo method_field('DELETE'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger m-1" onclick="return deleteConfirmation()">Delete</button>
                                    </form>
                                    <?php endif; ?>
                                    <?php else: ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('deleteProduct')): ?>
                                    <a href="<?php echo e(route('admin.product.restore', $product->id)); ?>"><button type="submit" class="btn btn-primary m-1">Restore</button></a>
                                    <?php endif; ?>
                                    <?php endif; ?>
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
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ndm10\Desktop\WEB4013 - Lap trinh PHP3\Lab\Assignment\PRJ-MFashion\resources\views/admin/product/index.blade.php ENDPATH**/ ?>