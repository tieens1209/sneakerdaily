<?php $__env->startSection('title'); ?>
    Chi tiết đơn hàng <?php echo e($bill->id); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4 mt-5">Chi tiết đơn hàng <?php echo e($bill->id); ?></h5>
                        <a href="<?php echo e(route('invoice', $bill->id)); ?>"><button type="submit" class="btn btn-success m-1">In hóa
                                đơn</button></a>
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                    <tr>
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
                                            <h6 class="fw-semibold mb-0">Pay</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Payment method</h6>
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
                                                    Paid (<span class="format-currency"><?php echo e($bill->total); ?>đ</span>)
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
                                                    <option value="1">Đơn hàng mới</option>
                                                    <option value="2">Đơn hàng đang được đóng gói</option>
                                                    <option value="3">Đơn hàng đang được vận chuyển</option>
                                                    <option value="4">Đơn hàng đã được giao</option>
                                                    <option value="5">Giao hàng thất bại</option>
                                                    <option value="6">Đơn hàng đã bị hủy</option>
                                                </select>
                                            </td>
                                            <td class="border-bottom-0" style="display: flex;">
                                                <button type="submit" class="btn btn-info m-1">Cập nhật</button>
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
                                            <h6 class="fw-semibold mb-0">STT</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Tên sản phẩm</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Hình ảnh</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Giá</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Số lượng</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Size</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Tổng tiền</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $stt = 1;
                                    ?>
                                    <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0"><?php echo e($stt); ?></h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal"><?php echo e($cart->product->name); ?></p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <img src="<?php echo e(asset('storage/images/products/' . $cart->product->srcImage)); ?>"
                                                    alt="" width="80" height="105">
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal"><span class="format-currency"><?php echo e($cart->product->priceSale); ?>đ</span> <del
                                                        style="font-size: 12px"><span class="format-currency"><?php echo e($cart->product->price); ?>đ</span></del></p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal"><?php echo e($cart->qty); ?></p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal"><?php echo e($cart->size); ?></p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal format-currency"><?php echo e($cart->total); ?>đ</p>
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
                                        <td class="format-currency"><?php echo e($totalBill - $bill->total); ?>đ</td>
                                    </tr>
                                    <tr>
                                        <th colspan="6">Tổng tiền thanh toán</th>
                                        <th class="format-currency"><?php echo e($bill->total); ?>đ</th>
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

<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laragon\www\ban-quan-ao\resources\views/admin/bill/detailBill.blade.php ENDPATH**/ ?>