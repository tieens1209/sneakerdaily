<?php $__env->startSection('title'); ?>
    <?php echo e($product->name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Shop Details Section Begin -->

    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="/">Trang chủ</a>
                            <a href="<?php echo e(route('listProduct')); ?>">Shop</a>
                            <span><?php echo e($product->name); ?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            <?php
                                $i = 1;
                                $active = 'active';
                            ?>
                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e($active); ?>" data-toggle="tab"
                                        href="#tabs-<?php echo e($i); ?>" role="tab">
                                        <div class="product__thumb__pic set-bg"
                                            data-setbg="<?php echo e(asset('storage/images/products/' . $image->srcImage)); ?>">
                                        </div>
                                    </a>
                                </li>
                                <?php
                                    $i++;
                                    if ($i > 1) {
                                        $active = '';
                                    }
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            <?php
                                $i = 1;
                                $active = 'active';
                            ?>
                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="tab-pane <?php echo e($active); ?>" id="tabs-<?php echo e($i); ?>" role="tabpanel">
                                    <div class="product__details__pic__item">
                                        <img src="<?php echo e(asset('storage/images/products/' . $image->srcImage)); ?>"
                                            alt="">
                                    </div>
                                </div>
                                <?php
                                    $i++;
                                    if ($i > 1) {
                                        $active = '';
                                    }
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4><?php echo e($product->name); ?></h4>
                            <div class="d-flex justify-content-center py-2">

                                <div id="rateProduct"></div>
                            </div>
                            <h3 class="d-flex justify-content-center align-items-center">
                                <div class="format-currency"><?php echo e($product->priceSale); ?>đ</div> <span
                                    class="format-currency"><?php echo e($product->price); ?>đ</span>
                            </h3>

                            <div class="product__details__option">
                                <div class="product__details__option__size">
                                    <form action="<?php echo e(route('addToCart', $product->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('POST'); ?>
                                        <span>Size:</span>
                                        <?php if($product->size->XXXL > 0): ?>
                                            <label for="xxxl">xxxl
                                                <input type="radio" id="xxxl" name="size" value="xxxl">
                                            </label>
                                        <?php endif; ?>
                                        <?php if($product->size->XXL > 0): ?>
                                            <label for="xxl">xxl
                                                <input type="radio" id="xxl" name="size" value="xxl">
                                            </label>
                                        <?php endif; ?>
                                        <?php if($product->size->XL > 0): ?>
                                            <label for="xl">xl
                                                <input type="radio" id="xl" name="size" value="xl">
                                            </label>
                                        <?php endif; ?>
                                        <?php if($product->size->L > 0): ?>
                                            <label for="l">l
                                                <input type="radio" id="l" name="size" value="l">
                                            </label>
                                        <?php endif; ?>
                                        <?php if($product->size->M > 0): ?>
                                            <label for="m">m
                                                <input type="radio" id="m" name="size" value="m">
                                            </label>
                                        <?php endif; ?>
                                        <?php if($product->size->S > 0): ?>
                                            <label for="s">s
                                                <input type="radio" id="s" name="size" value="s">
                                            </label>
                                        <?php endif; ?>
                                </div>
                            </div>
                            <div class="product__details__cart__option d-flex align-items-center justify-content-center">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1" name="qty">
                                    </div>
                                </div>
                                <button type="submit" class="primary-btn">Thêm vào giỏ hàng</button>
                    </form>
                            </div>
                            <div class="product__details__btns__option">


                                <a style="cursor: pointer" onclick="add_heart(<?php echo e($product->id); ?>)"><img
                                        src="<?php echo e(asset('storage/img/icon/heart.png')); ?>" alt=""
                                        id="Myheart_<?php echo e($product->id); ?>" width="20">
                                </a>
                                <a data-toggle="modal" data-target="#compare" style="cursor: pointer"
                                    onclick="add_compare(<?php echo e($product->id); ?>)"><img
                                        src="<?php echo e(asset('storage/img/icon/compare.png')); ?>" alt="" width="20">
                                </a>
                            </div>
                            <div style="width: 300px;margin: 0 auto">

                                <div class="product-size-guide"><a data-toggle="modal" data-target="#size" style="cursor: pointer">Gợi ý tìm size</a></div>
                            </div>
                            <div class="product__details__last__option">

                                <ul>
                                    <li><span>SKU:</span> 2023<?php echo e($product->id); ?></li>
                                    <li><span>Dòng sản phẩm:</span> <?php echo e($product->category->name); ?></li>
                                    <li><span>Thương hiệu:</span> <?php echo e($product->brand->name); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?php echo e($product->id); ?>">
                    <input type="hidden" id="wishlist_name<?php echo e($product->id); ?>" value="<?php echo e($product->name); ?>">
                    <input type="hidden" id="wishlist_image<?php echo e($product->id); ?>"
                        value="<?php echo e(URL::to('storage/images/products/' . $productImage->srcImage)); ?>">
                    <input type="hidden" id="wishlist_pricesale<?php echo e($product->id); ?>" value="<?php echo e($product->priceSale); ?>">
                    <input type="hidden" id="wishlist_price<?php echo e($product->id); ?>" value="<?php echo e($product->price); ?>">
                    <input type="hidden" id="wishlist_url<?php echo e($product->id); ?>"
                        value="<?php echo e(URL::to('/detail-product/' . $product->id)); ?>">
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5" role="tab">Mô tả</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Đánh
                                        giá(<?php echo e(count($comments) > 0 ? count($comments) : '0'); ?>)</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <?php
                                            echo $product->description;
                                        ?>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-6" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note">
                                        <div class="blog__details__comment">
                                            <?php if(count($comments) > 0): ?>
                                                <div style="height: 300px; overflow-y: auto; overflow-x: hidden;">
                                                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="row">
                                                            <div class="col-lg-2">
                                                            </div>
                                                            <div class="col-lg-8 py-2"
                                                                style="border-bottom: 1px solid #d9d9d9;">
                                                                <div class="rateYo d-block"
                                                                    id="rateItem_<?php echo e($index); ?>">
                                                                </div>
                                                                <div class="p-1"
                                                                    style="color: #b7b7b7; font-size: 12px">
                                                                    <?php echo e(\Carbon\Carbon::parse($item->created_at)->format('d.m.Y')); ?>

                                                                </div>
                                                                <div class="d-flex gap-2 p-1">
                                                                    <h5 class="mr-2 font-weight-bold">
                                                                        <?php echo e($item->user->fullname); ?>

                                                                    </h5>
                                                                    <div style="color: #8a8888">
                                                                        <?php echo e($item->content); ?>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2">

                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            <?php else: ?>
                                                <h2 class="text-center" style="color: #b7b7b7; font-size: 25px">Chưa có
                                                    đánh giá nào</h2>
                                            <?php endif; ?>

                                            <?php if(Auth::check() && $cart && $cart->idUser == Auth::user()->id && $countCommentUser == 0 && $order != null): ?>
                                                <!-- Nội dung bạn muốn hiển thị khi người dùng đã đăng nhập -->
                                                <form action="<?php echo e(route('comment.store')); ?>" method="POST"
                                                    id="form_create">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('POST'); ?>
                                                    <div class="row mt-4">
                                                        <div class="col-lg-2">
                                                        </div>
                                                        <div class="col-lg-8 text-center">
                                                            <div class="text-center">
                                                                <h3 class="related-title">Đánh giá sản phẩm</h3>
                                                            </div>
                                                            <div class="text-center py-2">
                                                                <div id="rateYo"></div>
                                                            </div>
                                                            <input type="hidden" name="rating" id="rating_start"
                                                                required>

                                                            <input type="hidden" name="idProduct"
                                                                value="<?php echo e($product->id); ?>">
                                                            <textarea placeholder="Comment" name="content" id="content" required></textarea>
                                                        </div>
                                                        <div class="col-lg-2">
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="d-flex justify-content-center">
                                                    <button type="submit" class="site-btn" onclick="submitform()">Gửi
                                                        đánh
                                                        giá</button>
                                                </div>
                                            <?php else: ?>
                                            <?php endif; ?>

                                        </div>
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-7" role="tabpanel">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->
    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <?php if(count($relatedProducts) > 0): ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="related-title">Sản phẩm cùng loại</h3>
                    </div>
                </div>
                <div class="row">

                    <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="<?php echo e(asset('storage/images/products/' . $relatedProduct->srcImage)); ?>">
                                    <span class="label">New</span>
                                    <ul class="product__hover">
                                        <li><a style="cursor: pointer"
                                                onclick="add_heart(<?php echo e($relatedProduct->id); ?>)"><img
                                                    src="<?php echo e(asset('storage/img/icon/heart.png')); ?>" alt=""
                                                    id="Myheart_<?php echo e($relatedProduct->id); ?>">
                                                <span>Yêu thích</span></a></li>
                                        <li><a data-toggle="modal" data-target="#compare" style="cursor: pointer"
                                                onclick="add_compare(<?php echo e($relatedProduct->id); ?>)"><img
                                                    src="<?php echo e(asset('storage/img/icon/compare.png')); ?>" alt="">
                                                <span>So sánh</span></a></li>
                                        <li><a href="<?php echo e(route('detailProduct', $relatedProduct->id)); ?>"><img
                                                    src="<?php echo e(asset('storage/img/icon/search.png')); ?>"
                                                    alt=""><span>Chi tiết</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><?php echo e($relatedProduct->name); ?></h6>
                                    <a href="<?php echo e(route('detailProduct', $relatedProduct->id)); ?>" class="add-cart">+ Mua
                                        ngay</a>

                                    <h5><span class="format-currency"><?php echo e($relatedProduct->priceSale); ?>đ</span> <del><span
                                                class="format-currency"><?php echo e($relatedProduct->price); ?>đ</span></del></h5>

                                </div>
                                
                            </div>
                        </div>
                        <input type="hidden" value="<?php echo e($relatedProduct->id); ?>">
                        <input type="hidden" id="wishlist_name<?php echo e($relatedProduct->id); ?>"
                            value="<?php echo e($relatedProduct->name); ?>">
                        <input type="hidden" id="wishlist_image<?php echo e($relatedProduct->id); ?>"
                            value="<?php echo e(URL::to('storage/images/products/' . $relatedProduct->srcImage)); ?>">
                        <input type="hidden" id="wishlist_pricesale<?php echo e($relatedProduct->id); ?>"
                            value="<?php echo e($relatedProduct->priceSale); ?>">
                        <input type="hidden" id="wishlist_price<?php echo e($relatedProduct->id); ?>"
                            value="<?php echo e($relatedProduct->price); ?>">
                        <input type="hidden" id="wishlist_url<?php echo e($relatedProduct->id); ?>"
                            value="<?php echo e(URL::to('/detail-product/' . $relatedProduct->id)); ?>">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
            <?php endif; ?>
        </div>
    </section>
    <!-- Related Section End -->
<?php $__env->startSection('js'); ?>
    <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <script>
            Toastify({
                text: "<?php echo e($message); ?>",
                className: "info",
                style: {
                    background: "red",
                }
            }).showToast();
        </script>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <script>

        $(function() {
            $("#rateYo").rateYo({
                rating: 0
            }).on('rateyo.set', function(e, data) {
                $('#rating_start').val(data.rating);
                // alert("The rating is set to" + data.rating + "!")
            });
        });
        $(function() {
            $("#rateProduct").rateYo({
                rating: <?php echo e($averageRating); ?>

            }).on('rateyo.set', function(e, data) {
                $('#rating_start').val(data.rating);
                // alert("The rating is set to" + data.rating + "!")
            });
        });
        $(function() {
            // Initialize individual item ratings
            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                $("#rateItem_<?php echo e($index); ?>").rateYo({
                    rating: <?php echo e($item->rating); ?>

                })
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        });


        function makeToast(message, color) {
            Toastify({
                text: message,
                backgroundColor: color,
            }).showToast();
        }


        function submitform() {
            var $form = $('#form_create')[0];
            var contentValue = $('#content').val().trim(); // Thay '#content' bằng id của trường content thực tế

            if ($form.checkValidity()) {
                if (checkContentLength(contentValue)) {
                    $form.submit();
                } else {
                    makeToast('Nội dung cần có tối đa 300 ký tự', '#F28585');
                }
            } else {
                makeToast('Bạn cần nhập đầy đủ đánh giá sao và nội dung', '#F28585');
            }
            return false;
        }

        function checkContentLength(content) {
            var maxLength = 300;
            return content.length <= maxLength;
        }

        submitform();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\ban-quan-ao\resources\views/product/productDetail.blade.php ENDPATH**/ ?>