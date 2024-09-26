
<?php $__env->startSection('title'); ?>
    Danh sách bài viết
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4 mt-5">Blogs</h5>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('addCategory')): ?>
                            <a href="<?php echo e(route('blog.create')); ?>"><button type="submit" class="btn btn-success m-1">Thêm bài
                                    viết</button></a>
                        <?php endif; ?>
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">STT</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Tiêu đề</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Ảnh bìa</h6>
                                        </th>

                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Hoạt động</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $stt = 1;
                                    ?>
                                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0"><?php echo e($stt); ?></h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal"><?php echo e($blog->title); ?></p>
                                            </td>

                                            <td class="border-bottom-0">
                                                <img src="<?php echo e(asset('storage/images/blogs/' . $blog->image->srcImage)); ?>"
                                                    width="68" height="68" alt="">
                                            </td>
                                            <td class="border-bottom-0" style="display: flex;">

                                                <?php if(is_null($blog->deleted_at)): ?>
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('updateCategory')): ?>
                                                        <a href="<?php echo e(route('blog.edit', $blog->id)); ?>"><button type="submit"
                                                                class="btn btn-info m-1">Cập nhật</button></a>
                                                    <?php endif; ?>
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('deleteBlog')): ?>
                                                        <form action="<?php echo e(route('blog.destroy', $blog->id)); ?>" method="post">
                                                            <?php echo method_field('DELETE'); ?>
                                                            <?php echo csrf_field(); ?>
                                                            <button type="submit" class="btn btn-danger m-1"
                                                                onclick="return deleteConfirmation()">Xóa</button>
                                                        </form>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('deleteBlog')): ?>
                                                        <a href="<?php echo e(route('admin.blog.restore', $blog->id)); ?>"><button
                                                                type="submit" class="btn btn-primary m-1">Restore</button></a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <?php
                                            $stt++;
                                        ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\ban-quan-ao\resources\views/admin/blog/index.blade.php ENDPATH**/ ?>