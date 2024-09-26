<nav class="navbar navbar-expand-lg navbar-light">
    <ul class="navbar-nav">
    <li class="nav-item d-block d-xl-none">
        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
        <i class="ti ti-menu-2"></i>
        </a>
    </li>
  
    </ul>
    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
        
        <li class="nav-item dropdown">
        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img src="<?php echo e(asset('storage/images/profile/user-1.jpg')); ?>" alt="" width="35" height="35" class="rounded-circle">
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
            <div class="message-body">
            
          
            <form action="<?php echo e(route('adminLogout')); ?>" method="POST" class=" dropdown-item">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <button type="submit" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</button>
            </form>
            </div>
        </div>
        </li>
        <p><?php echo e(Auth::user()->username); ?></p>
    </ul>
    </div>
</nav><?php /**PATH F:\laragon\www\ban-quan-ao\resources\views/layouts/headerAdmin.blade.php ENDPATH**/ ?>