<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Edit product</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('product.update', $product->id)); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($product->name); ?>">
                                <?php $__errorArgs = ['name'];
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
                                    <label for="exampleInputEmail1" class="form-label">Price</label>
                                    <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($product->price); ?>">
                                    <?php $__errorArgs = ['price'];
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
                                    <label for="exampleInputEmail1" class="form-label">Price sale</label>
                                    <input type="text" name="priceSale" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($product->priceSale); ?>">
                                    <?php $__errorArgs = ['priceSale'];
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
                            <div class="row">
                                <div class="mb-3 col-4">
                                    <label for="exampleInputEmail1" class="form-label">Gender</label>
                                    <select name="gender" id="" class="form-select" >
                                        <option value="1" <?php if($product->gender == 1): echo 'selected'; endif; ?>>Male</option>
                                        <option value="2" <?php if($product->gender == 2): echo 'selected'; endif; ?>>Female</option>
                                        <option value="3" <?php if($product->gender == 3): echo 'selected'; endif; ?>>Unisex</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-4">
                                    <label for="exampleInputEmail1" class="form-label">Category</label>
                                    <select name="category" id="" class="form-select" >
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->id); ?>" <?php if($product->idCategory == $category->id): echo 'selected'; endif; ?>><?php echo e($category->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="mb-3 col-4">
                                    <label for="exampleInputEmail1" class="form-label">Brand</label>
                                    <select name="brand" id="" class="form-select" >
                                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($brand->id); ?>" <?php if($product->idBrand == $brand->id): echo 'selected'; endif; ?>><?php echo e($brand->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image</label>
                                <input type="file" class="form-control" name="images[]" accept="image/*" multiple>
                                <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <img src="<?php echo e(asset('storage/images/products/'.$image->srcImage)); ?>" alt="" width="90" class="m-2">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__errorArgs = ['images'];
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
                            <label for="exampleInputEmail1" class="form-label">Product number in size</label>
                            <div class="row">
                                <div class="mb-3 col-2">
                                    <label for="exampleInputEmail1" class="form-label">S</label>
                                    <input type="number" name="sizeS" class="form-control" min="0" value="<?php echo e($product->size->S); ?>">
                                </div>
                                <div class="mb-3 col-2">
                                    <label for="exampleInputEmail1" class="form-label">M</label>
                                    <input type="number" name="sizeM" class="form-control" min="0" value="<?php echo e($product->size->M); ?>">
                                </div>
                                <div class="mb-3 col-2">
                                    <label for="exampleInputEmail1" class="form-label">L</label>
                                    <input type="number" name="sizeL" class="form-control" min="0" value="<?php echo e($product->size->L); ?>">
                                </div>
                                <div class="mb-3 col-2">
                                    <label for="exampleInputEmail1" class="form-label">XL</label>
                                    <input type="number" name="sizeXL" class="form-control" min="0" value="<?php echo e($product->size->XL); ?>">
                                </div>
                                <div class="mb-3 col-2">
                                    <label for="exampleInputEmail1" class="form-label">2XL</label>
                                    <input type="number" name="size2XL" class="form-control" min="0" value="<?php echo e($product->size->XXL); ?>">
                                </div>
                                <div class="mb-3 col-2">
                                    <label for="exampleInputEmail1" class="form-label">3XL</label>
                                    <input type="number" name="size3XL" class="form-control" min="0" value="<?php echo e($product->size->XXXL); ?>">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Description</label>
                                <textarea name="description" id="editor" cols="30" rows="10" class="form-control"><?php echo e($product->description); ?></textarea>
                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#editor' ) )
                                        .catch( error => {
                                            console.error( error );
                                        } );
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
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ndm10\Documents\GitHub\PRJ-MaleFashion\PRJ-MFashion\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>