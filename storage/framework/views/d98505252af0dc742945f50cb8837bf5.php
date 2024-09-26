
<?php $__env->startSection('title'); ?>
    Chỉnh sửa bài viết(<?php echo e($blog->title); ?>)
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Chỉnh sửa bài viết(<?php echo e($blog->title); ?>)</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo e(route('blog.update', $blog->id)); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tiêu đề</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="<?php echo e($blog->title); ?>">
                                    <?php $__errorArgs = ['title'];
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
                                        <label for="exampleInputEmail1" class="form-label">Ảnh bìa</label>
                                        <input type="file" name="image" accept="image/* class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <img src="<?php echo e(asset('storage/images/blogs/' . $blog->image->srcImage)); ?>"
                                            alt="" width="100%">
                                        <?php $__errorArgs = ['image'];
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
                                    <label for="exampleInputPassword1" class="form-label">Mô tả</label>
                                    <textarea name="description" id="editor" cols="50" rows="50" class="form-control"><?php echo e($blog->description); ?></textarea>
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#editor'))
                                            .catch(error => {
                                                console.error(error);
                                            });
                                    </script>
                                    <?php $__errorArgs = ['description'];
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
                                <button type="submit" class="btn btn-primary">Hoàn tất</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\ban-quan-ao\resources\views/admin/blog/edit.blade.php ENDPATH**/ ?>