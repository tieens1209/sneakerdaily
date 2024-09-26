
<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Check Out</h4>
                        <div class="breadcrumb__links">
                            <a href="/">Home</a>
                            <a href="<?php echo e(route('listProduct')); ?>">Shop</a>
                            <span>Check Out</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <div class="cart__discount">
                    <h6>Discount codes</h6>
                    <form action="<?php echo e(route('discountCode')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>
                        <input type="text" placeholder="Coupon code" name="code" value="<?php if(isset($voucher)): ?><?php echo e($voucher->code); ?><?php endif; ?>" required>
                        <button type="submit">Apply</button>
                    </form>
                </div>
                <form action="<?php echo e(route('checkOut')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="checkout__title">Billing Details</h6>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Name<span>*</span></p>
                                        <input type="text" name="name" value="<?php echo e($user->fullname); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" placeholder="Apartment, suite, unite ect (optinal)" name="address" value="<?php echo e($user->address); ?>">
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="phone" value="<?php echo e($user->phone); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email" value="<?php echo e($user->email); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Order notes<span></span></p>
                                <input type="text"
                                placeholder="Notes about your order, e.g. special notes for delivery." name="note">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <ul class="checkout__total__products">
                                    <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($cart->product->name); ?> x<?php echo e($cart->qty); ?><span>$ <?php echo e($cart->qty * $cart->product->priceSale); ?></span></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Shipping <span>Free</span></li>
                                    <li>Discount <span>$<?php if(isset($voucher)): ?><?php echo e($voucher->value); ?> <?php else: ?> 0 <?php endif; ?></span></li>
                                    <li>Total <span>$<?php if(isset($voucher)): ?><?php echo e($totalBill - $voucher->value); ?> <del style="font-size: 15px; color:black;">$<?php echo e($totalBill); ?></del> <?php else: ?> <?php echo e($totalBill); ?> <?php endif; ?></span></li>
                                    <input type="hidden" name="total" value="<?php if(isset($voucher)): ?><?php echo e($totalBill - $voucher->value); ?> <?php else: ?> <?php echo e($totalBill); ?> <?php endif; ?>">
                                </ul>
                                
                                <button type="submit" class="site-btn" name="redirect">PAY WITH VNPAY</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ndm10\Desktop\WEB4013 - Lap trinh PHP3\Lab\Assignment\PRJ-MFashion\resources\views/order/checkOut.blade.php ENDPATH**/ ?>