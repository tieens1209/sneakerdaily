<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Male Fashion Admin</title>
<link rel="shortcut icon" type="image/png" href="<?php echo e(asset('storage/images/logos/favicon.png')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('css/styles.min.css')); ?>" />

<script src="<?php echo e(asset('ckeditor5-build-classic/ckeditor.js')); ?>"></script>

<script src="https://kit.fontawesome.com/7d23d1769b.js" crossorigin="anonymous"></script>

<script>
    function deleteConfirmation(){
        return confirm('Are you sure?');
    }
</script>
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
data-sidebar-position="fixed" data-header-position="fixed">
<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./index.html" class="text-nowrap logo-img">
        <img src="<?php echo e(asset('storage/img/logo.png')); ?>" width="180" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
        </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="<?php echo e(route('admin.dashboard')); ?>" aria-expanded="false">
            <span>
                <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">MANAGEMENT</span>
        </li>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('showAccount')): ?>
        <li class="sidebar-item">
            <a class="sidebar-link" href="<?php echo e(route('account.index')); ?>" aria-expanded="false">
            <span>
                <i class="fa-solid fa-user"></i>
            </span>
            <span class="hide-menu">Account</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('showCategory')): ?>
        <li class="sidebar-item">
            <a class="sidebar-link" href="<?php echo e(route('category.index')); ?>" aria-expanded="false">
            <span>
                <i class="fa-solid fa-list"></i>
            </span>
            <span class="hide-menu">Category</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('showBrand')): ?>
        <li class="sidebar-item">
            <a class="sidebar-link" href="<?php echo e(route('brand.index')); ?>" aria-expanded="false">
            <span>
                <i class="fa-solid fa-copyright"></i>
            </span>
            <span class="hide-menu">Brand</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('showProduct')): ?>
        <li class="sidebar-item">
            <a class="sidebar-link" href="<?php echo e(route('product.index')); ?>" aria-expanded="false">
            <span>
                <i class="fa-solid fa-shirt"></i>
            </span>
            <span class="hide-menu">Product</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('showBanner')): ?>
        <li class="sidebar-item">
            <a class="sidebar-link" href="<?php echo e(route('banner.index')); ?>" aria-expanded="false">
            <span>
                <i class="fa-solid fa-rectangle-ad"></i>
            </span>
            <span class="hide-menu">Banner</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('showVoucher')): ?>
        <li class="sidebar-item">
            <a class="sidebar-link" href="<?php echo e(route('voucher.index')); ?>" aria-expanded="false">
            <span>
                <i class="fa-brands fa-salesforce"></i>
            </span>
            <span class="hide-menu">Voucher</span>
            </a>
        </li>
        <?php endif; ?>
        <li class="sidebar-item">
            <a class="sidebar-link" href="<?php echo e(route('bill.index')); ?>" aria-expanded="false">
            <span>
                <i class="fa-solid fa-table"></i>
            </span>
            <span class="hide-menu">Order</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">AUTH</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
            <span>
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
            </span>
            <span class="hide-menu">Logout</span>
            </a>
        </li>
        <?php if(Auth::user()->role == 1): ?>
        <li class="sidebar-item">
            <a class="sidebar-link" href="<?php echo e(route('admin.account.createStaff')); ?>" aria-expanded="false">
            <span>
                <i class="fa-solid fa-user-plus"></i>
            </span>
            <span class="hide-menu">Create staff</span>
            </a>
        </li>
        <?php endif; ?>
        
        </ul>
        
    </nav>
    <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->
<!--  Main wrapper -->
<div class="body-wrapper">
    <!--  Header Start -->
    <header class="app-header">
    <?php echo $__env->make('layouts.headerAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
    <!--  Header End -->
    <?php echo $__env->yieldContent('content'); ?>
</div>
</div>
    <!--  Footer Start -->
    <?php echo $__env->make('layouts.footerAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  Footer End -->
</body>

</html><?php /**PATH C:\Users\ndm10\Desktop\WEB4013 - Lap trinh PHP3\Lab\Assignment\PRJ-MFashion\resources\views/layouts/appAdmin.blade.php ENDPATH**/ ?>