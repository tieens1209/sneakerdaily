<?php $__env->startSection('title'); ?>
    Danh sách đơn hàng
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4 mt-5">Đơn hàng</h5>
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle" id="example">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">STT</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Người đặt hàng</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Địa chỉ</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Số điện thoại</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Tổng tiền</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Pay</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Trạng thái</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Hoạt động</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $bills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0"><?php echo e($index + 1); ?></h6>
                                            </td>
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
                                                <p class="mb-0 fw-normal"><?php echo e(number_format( $bill->total, 0, ',', '.')); ?> ₫</p>
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
                                                        Đơn hàng mới
                                                    <?php elseif($bill->status == 2): ?>
                                                        Đơn hàng đang được đóng gói
                                                    <?php elseif($bill->status == 3): ?>
                                                        Đơn hàng đang được vận chuyển
                                                    <?php elseif($bill->status == 4): ?>
                                                        Đơn hàng đã được giao
                                                    <?php elseif($bill->status == 5): ?>
                                                        Giao hàng thất bại
                                                    <?php elseif($bill->status == 6): ?>
                                                        Đơn hàng đã bị hủy
                                                    <?php endif; ?>
                                                </p>
                                            </td>
                                            <td class="border-bottom-0" style="display: flex;">
                                                <a href="<?php echo e(route('bill.detail', $bill->id)); ?>"><button type="submit"
                                                        class="btn btn-info m-1">Chi tiết</button></a>
                                                <a href="<?php echo e(route('invoice', $bill->id)); ?>"><button type="submit"
                                                        class="btn btn-success m-1">In hóa đơn</button></a>
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

<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\ban-quan-ao\resources\views/admin/bill/index.blade.php ENDPATH**/ ?>