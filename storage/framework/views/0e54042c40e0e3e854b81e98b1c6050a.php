<?php $__env->startSection('title'); ?>
    Chỉnh sửa tài khoản(<?php echo e($user->username); ?>)
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Chỉnh sửa tài khoản</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo e(route('account.update', $user->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo e($user->username); ?>">
                                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div id="emailHelp" class="text-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tên đầy đủ</label>
                                    <input type="text" name="fullname" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo e($user->fullname); ?>">
                                    <?php $__errorArgs = ['fullname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div id="emailHelp" class="text-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="<?php echo e($user->email); ?>">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div id="emailHelp" class="text-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                                        <input type="text" name="phone" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="<?php echo e($user->phone); ?>">
                                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div id="emailHelp" class="text-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                                    <input type="text" name="address" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo e($user->address); ?>">
                                    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div id="emailHelp" class="text-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <?php if($user->role != 0): ?>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Chức năng sử dụng</label>
                                        <div class="row">
                                            <div class="col-2">
                                                Account <br>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="showAccount"
                                                        <?php if($user->hasPermissionTo('showAccount')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Show</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="addAccount"
                                                        <?php if($user->hasPermissionTo('addAccount')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">Add</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="updateAccount"
                                                        <?php if($user->hasPermissionTo('updateAccount')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Update</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="deleteAccount"
                                                        <?php if($user->hasPermissionTo('deleteAccount')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Delete</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                Category <br>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="showCategory"
                                                        <?php if($user->hasPermissionTo('showCategory')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Show</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="addCategory"
                                                        <?php if($user->hasPermissionTo('addCategory')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Add</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="updateCategory"
                                                        <?php if($user->hasPermissionTo('updateCategory')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Update</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="deleteCategory"
                                                        <?php if($user->hasPermissionTo('deleteCategory')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Delete</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                Brand <br>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="showBrand"
                                                        <?php if($user->hasPermissionTo('showBrand')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Show</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="addBrand"
                                                        <?php if($user->hasPermissionTo('addBrand')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Add</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="updateBrand"
                                                        <?php if($user->hasPermissionTo('updateBrand')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Update</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="deleteBrand"
                                                        <?php if($user->hasPermissionTo('deleteBrand')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Delete</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                Product <br>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="showProduct"
                                                        <?php if($user->hasPermissionTo('showProduct')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Show</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="addProduct"
                                                        <?php if($user->hasPermissionTo('addProduct')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Add</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="updateProduct"
                                                        <?php if($user->hasPermissionTo('updateProduct')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Update</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="deleteProduct"
                                                        <?php if($user->hasPermissionTo('deleteProduct')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Delete</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                Banner <br>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="showBanner"
                                                        <?php if($user->hasPermissionTo('showBanner')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Show</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="addBanner"
                                                        <?php if($user->hasPermissionTo('addBanner')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Add</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="updateBanner"
                                                        <?php if($user->hasPermissionTo('updateBanner')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Update</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="deleteBanner"
                                                        <?php if($user->hasPermissionTo('deleteBanner')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Delete</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                Voucher <br>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="showVoucher"
                                                        <?php if($user->hasPermissionTo('showVoucher')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Show</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="addVoucher"
                                                        <?php if($user->hasPermissionTo('addVoucher')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Add</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="updateVoucher"
                                                        <?php if($user->hasPermissionTo('updateVoucher')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Update</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="deleteVoucher"
                                                        <?php if($user->hasPermissionTo('deleteVoucher')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Delete</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                Blog <br>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="showBlog"
                                                        <?php if($user->hasPermissionTo('showBlog')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Show</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="addBlog"
                                                        <?php if($user->hasPermissionTo('addBlog')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Add</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="updateBlog"
                                                        <?php if($user->hasPermissionTo('updateBlog')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Update</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" name="deleteBlog"
                                                        <?php if($user->hasPermissionTo('deleteBlog')): ?> checked <?php endif; ?>>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault">Delete</label>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div id="emailHelp" class="text-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                <?php endif; ?>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\ban-quan-ao\resources\views/admin/account/edit.blade.php ENDPATH**/ ?>