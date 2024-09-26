    <div class="shop__sidebar">
        <div class="shop__sidebar__search">
        
            <form action="<?php echo e(route('listProduct')); ?>" method="get">
                <input type="text" placeholder="Tìm kiếm..." name="search" id="search">
                <button type="submit"><span class="icon_search"></span></button>
            </form>
        
        </div>
        <div class="shop__sidebar__accordion">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-heading">
                        <a data-toggle="collapse" data-target="#collapseOne">Dòng sản phẩm</a>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="shop__sidebar__categories">
                                <ul class="nice-scroll">
                                    <li><a href="<?php echo e(request()->fullUrlWithQuery(['category' => ''])); ?>">Tất
                                            cả</a>
                                    </li>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a class="<?php echo e($category->id == request()->input('category') ? 'active' : ''); ?>"
                                                href="<?php echo e(request()->fullUrlWithQuery(['category' => $category->id])); ?>"><?php echo e($category->name); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-heading">
                        <a data-toggle="collapse" data-target="#collapseTwo">Hãng sản phẩm</a>
                    </div>
                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="shop__sidebar__brand">
                                <ul>
                                    <li><a href="<?php echo e(request()->fullUrlWithQuery(['brand' => ''])); ?>">Tất
                                            cả</a>
                                    </li>
                                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a class="<?php echo e($brand->id == request()->input('brand') ? 'active' : ''); ?>"
                                                href="<?php echo e(request()->fullUrlWithQuery(['brand' => $brand->id])); ?>"><?php echo e($brand->name); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-heading">
                        <a data-toggle="collapse" data-target="#collapseThree">Giá</a>
                    </div>
                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="shop__sidebar__price">
                                <ul>
                                    <li>
                                        <a class="<?php echo e(request()->input('priceSaleGap') == '0-150000' ? 'active' : ''); ?>"
                                            href="<?php echo e(request()->fullUrlWithQuery(['priceSaleGap' => '0-150000'])); ?>">
                                            0-150k
                                        </a>
                                    </li>
                                    <li>
                                        <a class="<?php echo e(request()->input('priceSaleGap') == '150000-200000' ? 'active' : ''); ?>"
                                            href="<?php echo e(request()->fullUrlWithQuery(['priceSaleGap' => '150000-200000'])); ?>">
                                            150k-200k
                                        </a>
                                    </li>
                                    <li>
                                        <a class="<?php echo e(request()->input('priceSaleGap') == '200000-300000' ? 'active' : ''); ?>"
                                            href="<?php echo e(request()->fullUrlWithQuery(['priceSaleGap' => '200000-300000'])); ?>">
                                            200k-300k
                                        </a>
                                    </li>
                                    <li>
                                        <a class="<?php echo e(request()->input('priceSaleGap') == '300000-400000' ? 'active' : ''); ?>"
                                            href="<?php echo e(request()->fullUrlWithQuery(['priceSaleGap' => '300000-400000'])); ?>">
                                            300k - 400k
                                        </a>
                                    </li>
                                    <li>
                                        <a class="<?php echo e(request()->input('priceSaleGap') == '400000-500000' ? 'active' : ''); ?>"
                                            href="<?php echo e(request()->fullUrlWithQuery(['priceSaleGap' => '400000-500000'])); ?>">
                                            400k - 500k
                                        </a>
                                    </li>
                                    <li>
                                        <a class="<?php echo e(request()->input('priceSaleGap') == '500000+' ? 'active' : ''); ?>"
                                            href="<?php echo e(request()->fullUrlWithQuery(['priceSaleGap' => '500000+'])); ?>">
                                            500+
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div><?php /**PATH D:\laragon\laragon\www\ban-quan-ao\resources\views/product/productFilter.blade.php ENDPATH**/ ?>