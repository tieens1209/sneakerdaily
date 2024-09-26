<div class="row">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg"
                    data-setbg="<?php echo e(asset('storage/images/products/' . $product->image->srcImage)); ?>"
                    style="background-image: url(<?php echo e(asset('storage/images/products/' . $product->image->srcImage)); ?>);">
                    <ul class="product__hover">
                        <li><a style="cursor: pointer" onclick="add_heart(<?php echo e($product->id); ?>)"><img
                                    src="<?php echo e(asset('storage/img/icon/heart.png')); ?>" alt=""
                                    id="Myheart_<?php echo e($product->id); ?>">
                                <span>Yêu thích</span></a></li>
                        <li><a data-toggle="modal" data-target="#compare" style="cursor: pointer"
                                onclick="add_compare(<?php echo e($product->id); ?>)"><img
                                    src="<?php echo e(asset('storage/img/icon/compare.png')); ?>" alt="">
                                <span>So sánh</span></a></li>
                        <li><a href="<?php echo e(route('detailProduct', $product->id)); ?>"><img
                                    src="<?php echo e(asset('storage/img/icon/search.png')); ?>" alt=""> <span>Chi
                                    tiết</span></a>
                        </li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6><?php echo e($product->name); ?></h6>
                    <a href="<?php echo e(route('detailProduct', $product->id)); ?>" class="add-cart">+ Mua ngay</a>
                    <h5>
                        <span> <?php echo e(number_format($product->priceSale, 0, ',', '.')); ?> ₫</span>
                        <span class="price_sale"><?php echo e(number_format($product->price, 0, ',', '.')); ?> ₫</span>
                    </h5>
                </div>
            </div>
        </div>
        <input type="hidden" value="<?php echo e($product->id); ?>">
        <input type="hidden" id="wishlist_name<?php echo e($product->id); ?>" value="<?php echo e($product->name); ?>">
        <input type="hidden" id="wishlist_image<?php echo e($product->id); ?>"
            value="<?php echo e(URL::to('storage/images/products/' . $product->image->srcImage)); ?>">
        <input type="hidden" id="wishlist_pricesale<?php echo e($product->id); ?>" value="<?php echo e($product->priceSale); ?>">
        <input type="hidden" id="wishlist_price<?php echo e($product->id); ?>" value="<?php echo e($product->price); ?>">
        <input type="hidden" id="wishlist_url<?php echo e($product->id); ?>"
            value="<?php echo e(URL::to('/detail-product/' . $product->id)); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="row">
    <div class="col-lg-12">


        <div class="product__pagination ">

            <?php if($products->lastPage() > 1): ?>
                <?php for($i = 1; $i <= $products->lastPage(); $i++): ?>
                    <a class="<?php echo e($products->currentPage() == $i ? 'active' : ''); ?>"
                        href="<?php echo e($products->url($i)); ?>"><?php echo e($i); ?></a>
                <?php endfor; ?>
            <?php endif; ?>
        </div>

    </div>
</div>
</div>
<?php /**PATH F:\laragon\www\ban-quan-ao\resources\views/product/pagination_data.blade.php ENDPATH**/ ?>