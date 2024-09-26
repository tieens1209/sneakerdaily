<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4 mt-5">Detail Order <?php echo e($bill->id); ?></h5>
                    <a href="<?php echo e(route('invoice', $bill->id)); ?>"><button type="submit" class="btn btn-success m-1">Invoice</button></a>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
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
                                        <h6 class="fw-semibold mb-0">Pay</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Payment method</h6>
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
                                <tr>
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
                                        <p class="mb-0 fw-normal">
                                            <?php if($bill->pay == 1): ?>
                                            Paid ($<?php echo e($bill->total); ?>)
                                            <?php else: ?>
                                            Unpaid
                                            <?php endif; ?>
                                        </p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">
                                            <?php if($bill->paymentMethod == 1): ?>
                                            Payment via vnpay
                                            <?php elseif($bill->paymentMethod == 0): ?>
                                            Payment on delivery
                                            <?php endif; ?>
                                        </p>
                                    </td>
                                    <form action="<?php echo e(route('bill.update', $bill->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('POST'); ?>
                                    <td class="border-bottom-0">
                                        <select name="status" id="" class="form-select">
                                            <option value="1">New orders</option>
                                            <option value="2">Orders are being packed</option>
                                            <option value="3">Order is being shipped</option>
                                            <option value="4">Order has been delivered</option>
                                            <option value="5">Delivery failed</option>
                                            <option value="6">Order has been cancelled</option>
                                        </select>
                                    </td>
                                    <td class="border-bottom-0" style="display: flex;">
                                        <button type="submit" class="btn btn-info m-1">Update</button>
                                    </form>
                                    </td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0"></h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Product name</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Image</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Price</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Quantity</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Size</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Total</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $stt = 1;
                                ?>
                                <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo e($stt); ?></h6></td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal"><?php echo e($cart->product->name); ?></p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <img src="<?php echo e(asset('storage/images/products/'.$cart->product->srcImage)); ?>" alt="" width="80" height="105">
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">$<?php echo e($cart->product->priceSale); ?> <del style="font-size: 12px">$<?php echo e($cart->product->price); ?></del></p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal"><?php echo e($cart->qty); ?></p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal"><?php echo e($cart->size); ?></p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">$<?php echo e($cart->total); ?></p>
                                    </td>
                                </tr> 
                                <?php
                                    $stt++;
                                ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6">Discounted</td>
                                    <td>$<?php echo e($totalBill - $bill->total); ?></td>
                                </tr>
                                <tr>
                                    <th colspan="6">Total order</th>
                                    <th>$<?php echo e($bill->total); ?></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ndm10\Desktop\WEB4013 - Lap trinh PHP3\Lab\Assignment\PRJ-MFashion\resources\views/admin/bill/detailBill.blade.php ENDPATH**/ ?>