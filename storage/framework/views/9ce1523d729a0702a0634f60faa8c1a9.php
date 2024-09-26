
<?php $__env->startSection('title'); ?>
    Thêm nhân viên
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Thêm nhân viên</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo e(route('admin.account.createStaff')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('POST'); ?>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo e(old('username')); ?>">
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
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label for="exampleInputEmail1" class="form-label">Mật khẩu</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                        <?php $__errorArgs = ['password'];
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
                                        <label for="exampleInputEmail1" class="form-label">Xác nhận mật khẩu</label>
                                        <input type="password" name="repeat_password" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <?php $__errorArgs = ['repeat_password'];
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
                                    <label for="exampleInputEmail1" class="form-label">Tên đầy đủ</label>
                                    <input type="text" name="fullname" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo e(old('fullname')); ?>">
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
                                            aria-describedby="emailHelp" value="<?php echo e(old('email')); ?>">
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
                                            aria-describedby="emailHelp" value="<?php echo e(old('phone')); ?>">
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
                                        aria-describedby="emailHelp" value="<?php echo e(old('address')); ?>">
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
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Chức năng sử dụng</label>
                                    <div class="row">
                                        <div class="col-2">
                                            Tài khoản <br>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                                    name="showAccount">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Hiển
                                                    thị</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="addAccount">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Thêm</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="updateAccount">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Cập
                                                    nhật</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="deleteAccount">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Xóa</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            Phân loại <br>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="showCategory">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Hiển
                                                    thị</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="addCategory">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Thêm</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="updateCategory">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Cập
                                                    nhật</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="deleteCategory">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Xóa</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            Thương hiệu <br>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="showBrand">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Hiển
                                                    thị</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="addBrand">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Thêm</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="updateBrand">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Cập
                                                    nhật</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="deleteBrand">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Xóa</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            Sản phẩm <br>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="showProduct">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Hiển
                                                    thị</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="addProduct">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Thêm</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="updateProduct">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Cập
                                                    nhật</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="deleteProduct">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Xóa</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            Banner <br>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="showBanner">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Hiển
                                                    thị</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="addBanner">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Thêm</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="updateBanner">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Cập
                                                    nhật</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="deleteBanner">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Xóa</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            Voucher <br>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="showVoucher">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Hiển
                                                    thị</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="addVoucher">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Thêm </label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="updateVoucher">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Cập
                                                    nhật</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="deleteVoucher">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Xóa</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-4">
                                            Blog <br>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="showBlog">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Hiển
                                                    thị</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="addBlog">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Thêm</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="updateBlog">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Cập
                                                    nhật</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="deleteBlog">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Xóa</label>
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
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\ban-quan-ao\resources\views/admin/account/createStaff.blade.php ENDPATH**/ ?>