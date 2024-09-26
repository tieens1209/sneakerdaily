<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Đơn hàng của bạn</h4>
                        <div class="breadcrumb__links">
                            <a href="/">Trang chủ</a>
                            
                            <span>Đơn hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- List Order Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tổng giá trị</th>
                                    <th>Phương thức thanh toán</th>
                                    <th>Trạng thái đơn hàng</th>
                                    <th>Trạng thái thanh toán</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $stt = 1;
                                ?>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__text">
                                                <p><?php echo e($stt); ?></p>
                                            </div>
                                        </td>
                                        <?php
                                            $stt++;
                                        ?>
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__text">
                                                <p class="format-currency"><?php echo e($order->total); ?>đ</p>
                                            </div>
                                        </td>
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__text">
                                                <p>
                                                    <?php if($order->paymentMethod == 1): ?>
                                                        Thanh toán qua VNPay
                                                    <?php elseif($order->paymentMethod == 0): ?>
                                                        Thanh toán khi nhận hàng
                                                    <?php endif; ?>
                                                </p>
                                            </div>
                                        </td>
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__text">
                                                <p>
                                                    <?php if($order->status == 1): ?>
                                                        Đơn hàng mới
                                                    <?php elseif($order->status == 2): ?>
                                                        Đơn hàng đang được chuẩn bị
                                                    <?php elseif($order->status == 3): ?>
                                                        Đơn hàng đang được vận chuyển
                                                    <?php elseif($order->status == 4): ?>
                                                        Đơn hàng đã giao thành công
                                                    <?php elseif($order->status == 5): ?>
                                                        Đơn hàng đã bị từ chối
                                                    <?php elseif($order->status == 6): ?>
                                                        Đơn hàng đã bị hủy
                                                    <?php endif; ?>
                                                </p>
                                            </div>
                                        </td>
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__text">
                                                <p>
                                                    <?php if($order->pay == 1): ?>
                                                        Đã thanh toán
                                                    <?php else: ?>
                                                        Chưa thanh toán
                                                    <?php endif; ?>
                                                </p>
                                            </div>
                                        </td>
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__text">
                                                <a href="<?php echo e(route('detailOrder', $order->id)); ?>"><button type="button"
                                                        class="primary-btn">Chi tiết</button></a>
                                            </div>
                                            <?php if($order->pay != 1 && $order->paymentMethod == 1): ?>
                                                <div class="product__cart__item__text">
                                                    <form action="<?php echo e(route('checkOut')); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('POST'); ?>
                                                        <input type="hidden" value="<?php echo e($order->id); ?>" name="orderId">
                                                        <input type="hidden" value="<?php echo e($order->paymentMethod); ?>"
                                                            name="paymentMethod">
                                                        <button type="submit" class="primary-btn" name="redirect">Thanh
                                                            toán</button>
                                                    </form>
                                                </div>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- List Order Section End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laragon\www\ban-quan-ao\resources\views/order/listOrder.blade.php ENDPATH**/ ?>