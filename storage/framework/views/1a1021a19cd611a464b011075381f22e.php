<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4 mt-5">Order</h5>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">ID</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Orderer's name</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Address</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Phone</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Total</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Pay</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Status</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Action</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $bills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo e($bill->id); ?></h6></td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo e($bill->user->fullname); ?></p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo e($bill->user->address); ?></p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo e($bill->user->phone); ?></p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">$<?php echo e($bill->total); ?></p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">
                                        <?php if($bill->pay == 1): ?>
                                        Paid
                                        <?php else: ?>
                                        Unpaid
                                        <?php endif; ?>
                                    </p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">
                                        <?php if($bill->status == 1): ?>
                                        New orders
                                        <?php elseif($bill->status == 2): ?>
                                        Orders are being packed
                                        <?php elseif($bill->status == 3): ?>
                                        Order is being shipped
                                        <?php elseif($bill->status == 4): ?>
                                        Order has been delivered
                                        <?php elseif($bill->status == 5): ?>
                                        Delivery failed
                                        <?php elseif($bill->status == 6): ?>
                                        Order has been cancelled
                                        <?php endif; ?>
                                    </p>
                                </td>
                                <td class="border-bottom-0" style="display: flex;">
                                    <a href="<?php echo e(route('bill.detail', $bill->id)); ?>"><button type="submit" class="btn btn-info m-1">Detail</button></a>
                                    <a href="<?php echo e(route('invoice', $bill->id)); ?>"><button type="submit" class="btn btn-success m-1">Invoice</button></a>
                                </td>
                            </tr> 
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
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ndm10\Documents\GitHub\PRJ-MaleFashion\PRJ-MFashion\resources\views/admin/bill/index.blade.php ENDPATH**/ ?>