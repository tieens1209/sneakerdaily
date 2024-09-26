<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4 mt-5">Account</h5>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('addAccount')): ?>
                    <a href="<?php echo e(route('account.create')); ?>"><button type="submit" class="btn btn-success m-1">Add</button></a>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0"></h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Username</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Fullname</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Email</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Phone</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Role</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Action</h6>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $stt = 1;
                            ?>
                            <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo e($stt); ?></h6></td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo e($account->username); ?></p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo e($account->fullname); ?></p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo e($account->email); ?></p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo e($account->phone); ?></p>
                                </td>
                                <td class="border-bottom-0">
                                    <?php if($account->role == 0): ?>
                                    <p class="mb-0 fw-normal">Khách hàng</p>
                                    <?php elseif($account->role == 1): ?>
                                    <p class="mb-0 fw-normal">Quản trị</p>
                                    <?php elseif($account->role == 2): ?>
                                    <p class="mb-0 fw-normal">Nhân viên</p>
                                    <?php endif; ?>
                                </td>
                                <td class="border-bottom-0" style="display: flex;">
                                    <?php if(is_null($account->deleted_at)): ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('updateAccount')): ?>
                                    <a href="<?php echo e(route('account.edit', $account->id)); ?>"><button type="submit" class="btn btn-info m-1">Update</button></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('deleteAccount')): ?>
                                    <form action="<?php echo e(route('account.destroy', $account->id)); ?>" method="post">
                                        <?php echo method_field('DELETE'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger m-1" onclick="return deleteConfirmation()">Block</button>
                                    </form>
                                    <?php endif; ?>
                                    <?php else: ?>
                                    <a href="<?php echo e(route('admin.account.unblock', $account->id)); ?>"><button type="submit" class="btn btn-primary m-1">Unblock</button></a>
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
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ndm10\Desktop\WEB4013 - Lap trinh PHP3\Lab\Assignment\PRJ-MFashion\resources\views/admin/account/index.blade.php ENDPATH**/ ?>