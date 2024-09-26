<?php $__env->startSection('title'); ?>
    Giỏ hàng
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Giỏ hàng</h4>
                        <div class="breadcrumb__links">
                            <a href="/">Trang chủ</a>
                            <a href="<?php echo e(route('listProduct')); ?>">Sản phẩm</a>
                            <span>Giỏ hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Giỏ hàng Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <?php if(isset($carts[0]->id)): ?>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="shopping__cart__table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Kích cỡ</th>
                                        <th>Tổng tiền</th>
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
                                                        <img src="<?php echo e(asset('storage/images/products/' . $cart->product->srcImage)); ?>"
                                                            alt="" width="80">
                                                    </div>
                                                    <div class="product__cart__item__text">
                                                        <h6><?php echo e($cart->product->name); ?></h6>
                                                        <h5 class="format-currency"><?php echo e($cart->product->priceSale); ?>đ</h5>
                                                        <h5><del style="font-size: 15px"
                                                                class="text-danger format-currency"><?php echo e($cart->product->price); ?>đ</del>
                                                        </h5>
                                                    </div>
                                                </td>
                                                <td class="quantity__item">
                                                    <div class="quantity">
                                                        <div class="pro-qty-2">
                                                            <input type="text" value="<?php echo e($cart->qty); ?>"
                                                                name="<?php echo e($cart->id); ?>" min="1">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cart__price"><?php echo e($cart->size); ?></td>
                                                <td class="cart__price  format-currency"><?php echo e($cart->total); ?>đ</td>
                                                <td class="cart__close"><a href="<?php echo e(route('deleteInCart', $cart->id)); ?>"><i
                                                            class="fa fa-close"></i></a></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="continue__btn">
                                    <a href="<?php echo e(route('listProduct')); ?>">Tiếp tục mua sắm</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="continue__btn update__btn">
                                    <button type="submit">Cập nhật giỏ hàng</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                
                        <div class="cart__total">
                            <h6>Đơn hàng</h6>
                            <ul>
                                <li>Phí vận chuyển <span>Miễn phí</span></li>
                                <li>Tổng giá trị <span>
                                        <?php if(isset($voucher)): ?>
                                            <span class="format-currency"><?php echo e($totalBill - $voucher->value); ?>đ</span> <del
                                                style="font-size: 15px; color:black;"
                                                class="format-currency"><?php echo e($totalBill); ?>đ</del>
                                        <?php else: ?>
                                            <span class="format-currency"><?php echo e($totalBill); ?>đ</span>
                                        <?php endif; ?>
                                    </span></li>
                            </ul>
                            <a href="<?php echo e(route('checkOut')); ?>" class="primary-btn">Thanh toán</a>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <h3>Bạn chưa có sản phẩm nào trong giỏ. Hãy mua sắm!</h3>
            <?php endif; ?>
        </div>
    </section>
    <!-- Giỏ hàng Section End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\ban-quan-ao\resources\views/order/cart.blade.php ENDPATH**/ ?>