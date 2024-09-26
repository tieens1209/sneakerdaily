<?php $__env->startSection('title'); ?>
    Danh sách Banner
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4 mt-5">Banner</h5>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('addBanner')): ?>
                            <a href="<?php echo e(route('banner.create')); ?>"><button type="submit"
                                    class="btn btn-success m-1">Thêm Banner</button></a>
                        <?php endif; ?>
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">STT</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Tên Banner</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Hình ảnh</h6>
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
                                    <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0"><?php echo e($stt); ?></h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal"><?php echo e($banner->name); ?></p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <img src="<?php echo e(asset('storage/images/banners/' . $banner->srcImage)); ?>"
                                                    width="60" alt="">
                                            </td>
                                            <td class="border-bottom-0" style="display: flex;">
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('updateBanner')): ?>
                                                    <a href="<?php echo e(route('banner.edit', $banner->id)); ?>"><button type="submit"
                                                            class="btn btn-info m-1">Chỉnh sửa</button></a>
                                                <?php endif; ?>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('deleteBanner')): ?>
                                                    <form action="<?php echo e(route('banner.destroy', $banner->id)); ?>" method="post">
                                                        <?php echo method_field('DELETE'); ?>
                                                        <?php echo csrf_field(); ?>
                                                        <button type="submit" class="btn btn-danger m-1"
                                                            onclick="return deleteConfirmation()">Xóa</button>
                                                    </form>
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

<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\ban-quan-ao\resources\views/admin/banner/index.blade.php ENDPATH**/ ?>