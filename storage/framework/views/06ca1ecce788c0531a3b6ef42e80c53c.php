
<?php $__env->startSection('title'); ?>
<?php echo e($blog->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Blog Details Hero Begin -->
    <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h2><?php echo e($blog->title); ?></h2>
                        <ul>
                            <li>By Admin</li>
                            <li> <?php echo e(\Carbon\Carbon::parse($blog->created_at)->format('d.m.Y')); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="blog__details__pic">
                        <img src="<?php echo e(asset('storage/images/blogs/' . $blog->image->srcImage)); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__share">

                        </div>
                        <div class="blog__details__text">
                            <p>
                                <?php
                                    echo $blog->description;
                                ?>
                            </p>
                        </div>
                        <div class="blog__details__quote">
                            <i class="fa fa-quote-left"></i>
                            <p>“When designing an advertisement for a particular product many things should be
                                researched like where it should be displayed.”</p>
                            <h6>_ John Smith _</h6>
                        </div>


                        <div class="blog__details__btns">
                            <h3 class="text-center my-4">Blog Mới Nhất</h3>
                            <div class="row">
                                <?php $__currentLoopData = $latestBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemBlog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <a href="<?php echo e(route('detailBlog', $itemBlog->id)); ?>"
                                            class="blog__details__btns__item blog__details__btns__item--next">
                                            <p>Next Blog <span class="arrow_right"></span></p>
                                            <h5><?php echo e($itemBlog->title); ?></h5>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laragon\www\ban-quan-ao\resources\views/blog/detailBlog.blade.php ENDPATH**/ ?>