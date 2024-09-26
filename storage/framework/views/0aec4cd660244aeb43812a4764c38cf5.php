<?php $__env->startSection('title'); ?>
    Danh sách sản phẩm
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <style>
        .active {
            color: red !important;
            font-weight: bold !important;
        }
    </style>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Sản phẩm</h4>
                        <div class="breadcrumb__links">
                            <a href="/">Trang chủ</a>
                            <span>Sản phẩm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    
                    <?php echo $__env->make('product.productFilter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <form action="<?php echo e(request()->url()); ?>" method="get">
                                        <p>Sắp xếp:</p>
                                        <select name="priceSale" onchange="this.form.submit()">
                                            <option value=""
                                                <?php echo e(request()->input('priceSale') === '' ? 'selected' : ''); ?>>
                                                Mặc định
                                            </option>
                                            <option value="asc"
                                                <?php echo e(request()->input('priceSale') === 'asc' ? 'selected' : ''); ?>>
                                                Thấp đến cao
                                            </option>
                                            <option value="desc"
                                                <?php echo e(request()->input('priceSale') === 'desc' ? 'selected' : ''); ?>>
                                                Cao đến thấp
                                            </option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="table_data">
                        <?php echo $__env->make('product.pagination_data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    
                </div>
            </div>
        </div>
        

        <!-- Modal -->
 
        <!-- Modal -->
    </section>
    <!-- Shop Section End -->
<?php $__env->startSection('js'); ?>
    <script>
        $(document).ready(function() {

            $(document).on('click', '.product__pagination a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });
            function fetch_data(page) {
                // Get all query parameters from the current URL
                var urlParams = new URLSearchParams(window.location.search);
                urlParams.set('page', page);

                $.ajax({
                    url: "list-product?" + urlParams.toString(),
                    success: function(data) {
                        $('#table_data').html(data);
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Request Error:", status, error);
                    }
                });
            }

        });
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\ban-quan-ao\resources\views/product/productList.blade.php ENDPATH**/ ?>