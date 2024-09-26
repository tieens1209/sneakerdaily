
<?php $__env->startSection('title'); ?>
    Trang chủ
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="hero__items set-bg" data-setbg="<?php echo e(asset('storage/images/banners/' . $banner->srcImage)); ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-7 col-md-8">
                                <div class="hero__text">
                                    <h6>Bộ sưu tập mùa hè</h6>
                                    <h2><?php echo e($banner->name); ?></h2>
                                    <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                        commitment to exceptional quality.</p>
                                    <a href="<?php echo e(route('listProduct')); ?>"
                                        class="primary-btn d-flex justify-content-center align-items-center">
                                        <div>Mua ngay </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="<?php echo e(asset('storage/img/banner/banner-1.jpg')); ?>" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Bộ Sưu Tập Quần Áo 2024</h2>
                            <a href="<?php echo e(route('listProduct')); ?>">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="<?php echo e(asset('storage/img/banner/banner-2.jpg')); ?>" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Phụ Kiện</h2>
                            <a href="<?php echo e(route('listProduct')); ?>">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="<?php echo e(asset('storage/img/banner/banner-3.jpg')); ?>" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Giày Xuân 2024</h2>
                            <a href="<?php echo e(route('listProduct')); ?>">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Sản Phẩm</span>
                        <h2>Được Quan Tâm Nhất</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg"
                                data-setbg="<?php echo e(asset('storage/images/products/' . $product->image->srcImage)); ?>">
                                <span class="label">Sale</span>
                                <ul class="product__hover">
                                    <li><a style="cursor: pointer" onclick="add_heart(<?php echo e($product->id); ?>)"><img
                                                src="<?php echo e(asset('storage/img/icon/heart.png')); ?>" alt=""
                                                id="Myheart_<?php echo e($product->id); ?>">
                                            <span>Yêu thích</span></a></li>
                                    <li><a data-toggle="modal" data-target="#compare" style="cursor: pointer"
                                            onclick="add_compare(<?php echo e($product->id); ?>)"><img
                                                src="<?php echo e(asset('storage/img/icon/compare.png')); ?>" alt="">
                                            <span>So sánh</span></a></li>
                                    <li><a href="<?php echo e(route('detailProduct', $product->id)); ?>"><img
                                                src="<?php echo e(asset('storage/img/icon/search.png')); ?>" alt=""><span>Chi tiết</span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><?php echo e($product->name); ?></h6>
                                <a href="<?php echo e(route('detailProduct', $product->id)); ?>" class="add-cart">+ Mua ngay</a>
                                <h5>
                                    <span class="format-currency"><?php echo e($product->priceSale); ?>đ</span>
                                    <del><span class="format-currency"><?php echo e($product->price); ?>đ</span></del>
                                </h5>

                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?php echo e($product->id); ?>">
                    <input type="hidden" id="wishlist_name<?php echo e($product->id); ?>" value="<?php echo e($product->name); ?>">
                    <input type="hidden" id="wishlist_image<?php echo e($product->id); ?>"
                        value="<?php echo e(URL::to('storage/images/products/' . $product->image->srcImage)); ?>">
                    <input type="hidden" id="wishlist_pricesale<?php echo e($product->id); ?>" value="<?php echo e($product->priceSale); ?>">
                    <input type="hidden" id="wishlist_price<?php echo e($product->id); ?>" value="<?php echo e($product->price); ?>">
                    <input type="hidden" id="wishlist_url<?php echo e($product->id); ?>"
                        value="<?php echo e(URL::to('/detail-product/' . $product->id)); ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Categories Section Begin -->
    
    <!-- Categories Section End -->

    <!-- Instagram Section Begin -->
    
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Tin Mới Nhất</span>
                        <h2>Thời Trang Xu Hướng Mới</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg"
                                data-setbg="<?php echo e(asset('storage/images/blogs/' . $blog->image->srcImage)); ?>"></div>
                            <div class="blog__item__text">
                                <span><img src="img/icon/calendar.png" alt="">
                                    <?php echo e(\Carbon\Carbon::parse($blog->created_at)->format('d.m.Y')); ?></span>
                                <h5><?php echo e($blog->title); ?></h5>
                                <a href="<?php echo e(route('detailBlog', $blog->id)); ?>">Đọc tiếp</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laragon\www\ban-quan-ao\resources\views/index.blade.php ENDPATH**/ ?>