
<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Order Details</h4>
                        <div class="breadcrumb__links">
                            <a href="/">Home</a>
                            <a href="<?php echo e(route('listOrder')); ?>">Order List</a>
                            <span>Order Details</span>
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
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Payment Method</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <p><?php echo e($order->id); ?></p>
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <p><?php echo e($user->fullname); ?></p>
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <p><?php echo e($user->phone); ?></p>
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <p><?php echo e($user->address); ?></p>
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
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <h3>List product</h3><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Size</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $stt = 1;
                                ?>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <p><?php echo e($stt); ?></p>
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="<?php echo e(asset('storage/images/products/'.$product->product->srcImage)); ?>" alt="" width="80">
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <p><?php echo e($product->product->name); ?></p>
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <p>$<?php echo e($product->product->priceSale); ?> <del style="font-size: 15px" class="text-danger"> $<?php echo e($product->product->price); ?></del></p>
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <p><?php echo e($product->qty); ?></p>
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <p><?php echo e($product->size); ?></p>
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                            <p>$<?php echo e($product->product->priceSale * $product->qty); ?></p>
                                        </div>
                                    </td>
                                    <?php
                                        $stt++;
                                    ?>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ndm10\Desktop\WEB4013 - Lap trinh PHP3\Lab\Assignment\PRJ-MFashion\resources\views/order/detailOrder.blade.php ENDPATH**/ ?>