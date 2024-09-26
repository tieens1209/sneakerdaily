
<?php $__env->startSection('title'); ?>
   Danh sách Blog
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-blog set-bg" data-setbg="<?php echo e(asset('storage/img/breadcrumb-bg.jpg')); ?>" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Blog Của Chúng Tôi</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="<?php echo e(asset('storage/images/blogs/' . $blog->image->srcImage)); ?>"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> <?php echo e(\Carbon\Carbon::parse($blog->created_at)->format('d.m.Y')); ?></span>
                            <h5><?php echo e($blog->title); ?></h5>
                            <a href="<?php echo e(route('detailBlog', $blog->id)); ?>">Đọc tiếp</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laragon\www\ban-quan-ao\resources\views/blog/listBlog.blade.php ENDPATH**/ ?>