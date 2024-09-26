<div class="header__top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7">
                <div class="header__top__left">
                    <p>Chào xuân 2024, nhập Voucher MALEFASHION2024 để được giảm ngay 150.000</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <div class="header__top__right">
                    <div class="header__top__hover">

                    </div>
                    <div class="header__top__links">
                        
                        <?php if(Auth::check()): ?>
                            <div class="header__top__hover">
                                <span>Hi, <?php echo e(Auth::user()->username); ?> <i class="arrow_carrot-down"></i></span>
                                <ul class="text-center">
                                    <a href="<?php echo e(route('logout')); ?>">
                                        <li>Đăng xuất</li>
                                    </a>
                                    <?php if(Auth::user()->role == 1): ?>
                                        <a href="<?php echo e(route('admin.dashboard')); ?>">
                                            <li>Quản trị</li>
                                        </a>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>">Đăng nhập</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">

            <?php if(Auth::check()): ?>
                <div class="header__top__hover">
                    <span>Hi, <?php echo e(Auth::user()->username); ?> <i class="arrow_carrot-down"></i></span>
                    <ul class="text-center">
                        <a href="<?php echo e(route('logout')); ?>">
                            <li>Đăng xuất</li>
                        </a>
                        <?php if(Auth::user()->role == 1): ?>
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <li>Quản trị</li>
                            </a>
                        <?php endif; ?>
                    </ul>
                </div>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>">Đăng nhập</a>
            <?php endif; ?>
        </div>

    </div>
    <div class="offcanvas__nav__option">
        
        <a data-toggle="modal" data-target="#heart" style="cursor: pointer"><img
                src="<?php echo e(asset('storage/img/icon/heart.png')); ?>" alt="">
        </a>
        <a href="<?php echo e(route('viewCart')); ?>"><img src="<?php echo e(asset('storage/img/icon/cart.png')); ?>" alt="">
            <span></span></a>
        
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
        <p>Chào xuân 2024, nhập Voucher MALEFASHION2024 để được giảm ngay 150.000.

        </p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3">
            <div class="header__logo">
                <a href="/"><img src="<?php echo e(asset('storage/img/logo.png')); ?>" alt=""></a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <nav class="header__menu mobile-menu">
                <ul>
                    <li><a href="/">Trang chủ</a></li>
                    <li><a href="<?php echo e(route('listProduct')); ?>">Sản phẩm</a></li>
                    <li><a href="<?php echo e(route('listOrder')); ?>">Đơn hàng</a></li>
                    <li><a href="<?php echo e(route('listBlog')); ?>">Bài viết</a></li>
                    <li><a href="<?php echo e(route('about')); ?>">Về chúng tôi</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-3 col-md-3">
            <div class="header__nav__option">
                
                <a data-toggle="modal" data-target="#heart" style="cursor: pointer"><img
                        src="<?php echo e(asset('storage/img/icon/heart.png')); ?>" alt="">
                </a>
                <a href="<?php echo e(route('viewCart')); ?>"><img src="<?php echo e(asset('storage/img/icon/cart.png')); ?>" alt="">
                    <span></span></a>
                <div class="price"></div>
            </div>
        </div>
    </div>
    <div class="canvas__open"><i class="fa fa-bars"></i></div>
</div>
<?php /**PATH F:\laragon\www\ban-quan-ao\resources\views/layouts/header.blade.php ENDPATH**/ ?>