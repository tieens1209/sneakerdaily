
<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Order List</h4>
                        <div class="breadcrumb__links">
                            <a href="/">Home</a>
                            <a href="<?php echo e(route('viewCart')); ?>">Shopping Cart</a>
                            <span>Order List</span>
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
                                    <th>ID</th>
                                    <th>Total</th>
                                    <th>Payment Method</th>
                                    <th>Status</th>
                                    <th>Pay</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <p><?php echo e($order->id); ?></p>
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <p>$<?php echo e($order->total); ?></p>
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <p> <?php if($order->paymentMethod == 1): ?>
                                            Payment via vnpay
                                            <?php elseif($order->paymentMethod == 0): ?>
                                            Payment on delivery
                                            <?php endif; ?> </p>
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <p>
                                            <?php if($order->status == 1): ?>
                                            New orders
                                            <?php elseif($order->status == 2): ?>
                                            Orders are being packed
                                            <?php elseif($order->status == 3): ?>
                                            Order is being shipped
                                            <?php elseif($order->status == 4): ?>
                                            Order has been delivered
                                            <?php elseif($order->status == 5): ?>
                                            Delivery failed
                                            <?php elseif($order->status == 6): ?>
                                            Order has been cancelled
                                            <?php endif; ?>
                                            </p>
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <p>
                                                <?php if($order->pay == 1): ?>
                                                Paid
                                                <?php else: ?>
                                                Unpaid
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <a href="<?php echo e(route('detailOrder', $order->id)); ?>"><button type="button" class="primary-btn">Detail</button></a> 
                                        </div>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ndm10\Desktop\WEB4013 - Lap trinh PHP3\Lab\Assignment\PRJ-MFashion\resources\views/order/listOrder.blade.php ENDPATH**/ ?>