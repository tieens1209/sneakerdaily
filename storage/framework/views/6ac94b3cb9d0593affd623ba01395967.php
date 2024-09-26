<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4 mt-5">Mã giảm giá</h5>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('addVoucher')): ?>
                            <a href="<?php echo e(route('voucher.create')); ?>"><button type="submit" class="btn btn-success m-1">Thêm mã giảm giá</button></a>
                        <?php endif; ?>
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle" id="example">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">STT</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Tên mã giảm giá</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Code</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Bắt đầu</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Kết thúc</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Số lượng</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Giá trị</h6>
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
                                    <?php $__currentLoopData = $vouchers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voucher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0"><?php echo e($stt); ?></h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal"><?php echo e($voucher->name); ?></p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal"><?php echo e($voucher->code); ?></p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal"><?php echo e($voucher->dateStart); ?></p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal"><?php echo e($voucher->dateEnd); ?></p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal"><?php echo e($voucher->number); ?></p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal format-currency"><?php echo e($voucher->value); ?>đ</p>
                                            </td>
                                            <td class="border-bottom-0" style="display: flex;">
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('updateVoucher')): ?>
                                                    <a href="<?php echo e(route('voucher.edit', $voucher->id)); ?>"><button type="submit"
                                                            class="btn btn-info m-1">Cập nhật</button></a>
                                                <?php endif; ?>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('deleteVoucher')): ?>
                                                    <form action="<?php echo e(route('voucher.destroy', $voucher->id)); ?>" method="post">
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

<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laragon\www\ban-quan-ao\resources\views/admin/voucher/index.blade.php ENDPATH**/ ?>