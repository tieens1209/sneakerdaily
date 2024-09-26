
<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="/">Home</a>
                            <a href="<?php echo e(route('listProduct')); ?>">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <?php if(isset($carts[0]->id)): ?>
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Size</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <form action="<?php echo e(route('updateCart')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('POST'); ?>
                                    <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__pic">
                                                <img src="<?php echo e(asset('storage/images/products/'.$cart->product->srcImage)); ?>" alt="" width="80">
                                            </div>
                                            <div class="product__cart__item__text">
                                                <h6><?php echo e($cart->product->name); ?></h6>
                                            <h5>$<?php echo e($cart->product->priceSale); ?> <del style="font-size: 15px" class="text-danger"> $<?php echo e($cart->product->price); ?></del></h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input type="text" value="<?php echo e($cart->qty); ?>" name="<?php echo e($cart->id); ?>" min="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price"><?php echo e($cart->size); ?></td>
                                    <td class="cart__price">$ <?php echo e($cart->total); ?></td>
                                    <td class="cart__close"><a href="<?php echo e(route('deleteInCart', $cart->id)); ?>"><i class="fa fa-close"></i></a></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="<?php echo e(route('listProduct')); ?>">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <button type="submit">Update cart</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Shipping <span>Free</span></li>
                            <li>Total <span>$<?php if(isset($voucher)): ?><?php echo e($totalBill - $voucher->value); ?> <del style="font-size: 15px; color:black;">$<?php echo e($totalBill); ?></del> <?php else: ?> <?php echo e($totalBill); ?> <?php endif; ?></span></li>
                        </ul>
                        <a href="<?php echo e(route('checkOut')); ?>" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <h3>You do not have any products in your cart</h3>
            <?php endif; ?>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ndm10\Desktop\WEB4013 - Lap trinh PHP3\Lab\Assignment\PRJ-MFashion\resources\views/order/cart.blade.php ENDPATH**/ ?>