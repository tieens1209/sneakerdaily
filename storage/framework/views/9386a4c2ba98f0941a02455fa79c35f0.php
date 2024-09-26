<div class="header__top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7">
                <div class="header__top__left">
                    <p>Free shipping, 30-day return or refund guarantee.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <div class="header__top__right">
                    <div class="header__top__hover">
                        <span>Usd <i class="arrow_carrot-down"></i></span>
                        <ul>
                            <li>USD</li>
                            <li>EUR</li>
                            <li>USD</li>
                        </ul>
                    </div>
                    <div class="header__top__links">
                        <a href="#">FAQs</a>
                        <?php if(Auth::check()): ?>
                        <div class="header__top__hover">
                            <span>Hi, <?php echo e(Auth::user()->username); ?> <i class="arrow_carrot-down"></i></span>
                            <ul>
                                <a href="<?php echo e(route('logout')); ?>"><li>Logout</li></a>
                                <?php if(Auth::user()->role == 1): ?>
                                    <a href="<?php echo e(route('admin.dashboard')); ?>"><li>Admin</li></a>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>">Sign in</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
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
                    <li><a href="/">Home</a></li>
                    <li><a href="<?php echo e(route('listProduct')); ?>">Shop</a></li>
                    <li><a href="<?php echo e(route('listOrder')); ?>">Order</a>
                        
                    </li>
                    <li><a href="./blog.html">Blog</a></li>
                    <li><a href="./contact.html">Contacts</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-3 col-md-3">
            <div class="header__nav__option">
                <a href="#" class="search-switch"><img src="<?php echo e(asset('storage/img/icon/search.png')); ?>" alt=""></a>
                <a href="#"><img src="<?php echo e(asset('storage/img/icon/heart.png')); ?>" alt=""></a>
                <a href="<?php echo e(route('viewCart')); ?>"><img src="<?php echo e(asset('storage/img/icon/cart.png')); ?>" alt=""> <span></span></a>
                <div class="price"></div>
            </div>
        </div>
    </div>
    <div class="canvas__open"><i class="fa fa-bars"></i></div>
</div><?php /**PATH C:\Users\ndm10\Documents\GitHub\PRJ-MaleFashion\PRJ-MFashion\resources\views/layouts/header.blade.php ENDPATH**/ ?>