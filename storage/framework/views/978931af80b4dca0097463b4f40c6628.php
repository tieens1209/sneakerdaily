
<?php $__env->startSection('content'); ?>
    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="/">Home</a>
                            <a href="<?php echo e(route('listProduct')); ?>">Shop</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            <?php
                                $i = 1;
                                $active = 'active';
                            ?>
                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e($active); ?>" data-toggle="tab" href="#tabs-<?php echo e($i); ?>" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="<?php echo e(asset('storage/images/products/'.$image->srcImage)); ?>">
                                    </div>
                                </a>
                            </li>
                            <?php
                                $i++;
                                if($i > 1){
                                    $active = '';
                                }
                            ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            <?php
                                $i = 1;
                                $active = 'active';
                            ?>
                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tab-pane <?php echo e($active); ?>" id="tabs-<?php echo e($i); ?>" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="<?php echo e(asset('storage/images/products/'.$image->srcImage)); ?>" alt="">
                                </div>
                            </div>
                            <?php
                                $i++;
                                if($i > 1){
                                    $active = '';
                                }
                            ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4><?php echo e($product->name); ?></h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span> - 5 Reviews</span>
                            </div>
                            <h3>$<?php echo e($product->priceSale); ?> <span>$<?php echo e($product->price); ?></span></h3>
                            
                                <div class="product__details__option">
                                    <div class="product__details__option__size">
                                    <form action="<?php echo e(route('addToCart', $product->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('POST'); ?>
                                    <span>Size:</span>
                                    <?php if($product->size->XXXL > 0): ?>
                                    <label for="xxxl">xxxl
                                        <input type="radio" id="xxxl" name="size" value="xxxl">
                                    </label>
                                    <?php endif; ?>
                                    <?php if($product->size->XXL > 0): ?>
                                    <label for="xxl">xxl
                                        <input type="radio" id="xxl" name="size" value="xxl">
                                    </label>
                                    <?php endif; ?>
                                    <?php if($product->size->XL > 0): ?>
                                    <label for="xl">xl
                                        <input type="radio" id="xl" name="size" value="xl">
                                    </label>
                                    <?php endif; ?>
                                    <?php if($product->size->L > 0): ?>
                                    <label for="l">l
                                        <input type="radio" id="l" name="size" value="l">
                                    </label>
                                    <?php endif; ?>
                                    <?php if($product->size->M > 0): ?>
                                    <label for="m">m
                                        <input type="radio" id="m" name="size" value="m">
                                    </label>
                                    <?php endif; ?>
                                    <?php if($product->size->S > 0): ?>
                                    <label for="s">s
                                        <input type="radio" id="s" name="size" value="s">
                                    </label>
                                    <?php endif; ?>
                                </div>
                                
                            </div>
                            <div class="product__details__cart__option">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1" name="qty">
                                    </div>
                                </div>
                                
                                <button type="submit" class="primary-btn">add to cart</button>
                                </form>
                            </div>
                            <div class="product__details__btns__option">
                                <a href="#"><i class="fa fa-heart"></i> add to wishlist</a>
                                <a href="#"><i class="fa fa-exchange"></i> Add To Compare</a>
                            </div>
                            <div class="product__details__last__option">
                                <h5><span>Guaranteed Safe Checkout</span></h5>
                                <img src="<?php echo e(asset('storage/img/shop-details/details-payment.png')); ?>" alt="">
                                <ul>
                                    <li><span>SKU:</span> 2023<?php echo e($product->id); ?></li>
                                    <li><span>Categories:</span> <?php echo e($product->category->name); ?></li>
                                    <li><span>Brand:</span> <?php echo e($product->brand->name); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                    role="tab">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Customer
                                    Previews(5)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Additional
                                    information</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <?php
                                            echo $product->description
                                        ?>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-6" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">
                                            <h5>Products Infomation</h5>
                                            <p>A Pocket PC is a handheld computer, which features many of the same
                                                capabilities as a modern PC. These handy little devices allow
                                                individuals to retrieve and store e-mail messages, create a contact
                                                file, coordinate appointments, surf the internet, exchange text messages
                                                and more. Every product that is labeled as a Pocket PC must be
                                                accompanied with specific software to operate the unit and must feature
                                            a touchscreen and touchpad.</p>
                                            <p>As is the case with any new technology product, the cost of a Pocket PC
                                                was substantial during it’s early release. For approximately $700.00,
                                                consumers could purchase one of top-of-the-line Pocket PCs in 2003.
                                                These days, customers are finding that prices have become much more
                                                reasonable now that the newness is wearing off. For approximately
                                            $350.00, a new Pocket PC can now be purchased.</p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Material used</h5>
                                            <p>Polyester is deemed lower quality due to its none natural quality’s. Made
                                                from synthetic materials, not natural like wool. Polyester suits become
                                                creased easily and are known for not being breathable. Polyester suits
                                                tend to have a shine to them compared to wool and cotton suits, this can
                                                make the suit look cheap. The texture of velvet is luxurious and
                                                breathable. Velvet is a great choice for dinner party jacket and can be
                                            worn all year round.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-7" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note">Nam tempus turpis at metus scelerisque placerat nulla deumantos
                                            solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis
                                            ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo
                                        pharetras loremos.</p>
                                        <div class="product__details__tab__content__item">
                                            <h5>Products Infomation</h5>
                                            <p>A Pocket PC is a handheld computer, which features many of the same
                                                capabilities as a modern PC. These handy little devices allow
                                                individuals to retrieve and store e-mail messages, create a contact
                                                file, coordinate appointments, surf the internet, exchange text messages
                                                and more. Every product that is labeled as a Pocket PC must be
                                                accompanied with specific software to operate the unit and must feature
                                            a touchscreen and touchpad.</p>
                                            <p>As is the case with any new technology product, the cost of a Pocket PC
                                                was substantial during it’s early release. For approximately $700.00,
                                                consumers could purchase one of top-of-the-line Pocket PCs in 2003.
                                                These days, customers are finding that prices have become much more
                                                reasonable now that the newness is wearing off. For approximately
                                            $350.00, a new Pocket PC can now be purchased.</p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Material used</h5>
                                            <p>Polyester is deemed lower quality due to its none natural quality’s. Made
                                                from synthetic materials, not natural like wool. Polyester suits become
                                                creased easily and are known for not being breathable. Polyester suits
                                                tend to have a shine to them compared to wool and cotton suits, this can
                                                make the suit look cheap. The texture of velvet is luxurious and
                                                breathable. Velvet is a great choice for dinner party jacket and can be
                                            worn all year round.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Related Product</h3>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="<?php echo e(asset('storage/images/products/'.$relatedProduct->srcImage)); ?>">
                            <span class="label">New</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="<?php echo e(asset('storage/img/icon/heart.png')); ?>" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo e(asset('storage/img/icon/compare.png')); ?>" alt=""> <span>Compare</span></a></li>
                                <li><a href="<?php echo e(route('detailProduct', $relatedProduct->id)); ?>"><img src="<?php echo e(asset('storage/img/icon/search.png')); ?>" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><?php echo e($relatedProduct->name); ?></h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$<?php echo e($relatedProduct->priceSale); ?> <del>$<?php echo e($relatedProduct->price); ?></del></h5>
                            <div class="product__color__select">
                                <label for="pc-1">
                                    <input type="radio" id="pc-1">
                                </label>
                                <label class="active black" for="pc-2">
                                    <input type="radio" id="pc-2">
                                </label>
                                <label class="grey" for="pc-3">
                                    <input type="radio" id="pc-3">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- Related Section End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ban-quan-ao\resources\views/product/productDetail.blade.php ENDPATH**/ ?>