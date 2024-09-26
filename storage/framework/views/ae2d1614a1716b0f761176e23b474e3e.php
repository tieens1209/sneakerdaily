<?php $__env->startSection('title'); ?>
    Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <!--  Row 1 -->

        <div class="row">
            <div class="col-lg-8 d-flex align-items-strech">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">

                            <form class="mb-3 mb-sm-0 d-flex align-items-center gap-2" autocomplete="off">
                                <?php echo csrf_field(); ?>
                                <div class="">
                                    <p>Từ ngày: <input type="text" id="datepicker" class="form-control"></p>
                                </div>
                                <div>
                                    <input type="button" value="Lọc kết quả" class="btn btn-primary"
                                        id="btn-dashboard-filter">
                                </div>
                                <div class="">
                                    <p>Đến ngày: <input type="text" id="datepicker2" class="form-control"></p>
                                </div>

                                <div>

                                    <select class="form-select dashboard-filter">
                                        <option value="7">Chọn thời gian</option>
                                        <option value="7">7 ngày trước</option>
                                        <option value="30">30 ngày trước</option>
                                        <option value="90">90 ngày trước</option>
                                    </select>
                                </div>


                            </form>
                        </div>
                        <div id="chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Yearly Breakup -->
                        <div class="card overflow-hidden">
                            <div class="card-body p-4">
                                <h5 class="card-title mb-9 fw-semibold">Tăng trưởng so với năm trước</h5>
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="fw-semibold mb-3 format-currency"><?php echo e($currentYearTotal); ?>đ</h4>
                                        <div class="d-flex align-items-center mb-3">
                                            <?php if($percentageChangeYear > 0): ?>
                                                <span
                                                    class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-arrow-up-left text-success"></i>
                                                </span>
                                            <?php else: ?>
                                                <span
                                                    class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-arrow-down-right text-danger"></i>
                                                </span>
                                            <?php endif; ?>

                                            <p class="text-dark me-1 fs-3 mb-0"><?php echo e($percentageChangeYear); ?>%</p>
                                            <p class="fs-3 mb-0">năm trước</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <?php $__currentLoopData = $revenues->sortByDesc('year')->take(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $revenue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="me-4">
                                                    <span
                                                        class="round-8 <?php echo e($index === 0 ? 'bg-primary' : 'bg-light-primary'); ?> rounded-circle me-2 d-inline-block"></span>
                                                    <span class="fs-2"><?php echo e($revenue->year); ?></span>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex justify-content-center">
                                            <div id="breakup"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- Monthly Earnings -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row alig n-items-start">
                                    <div class="col-8">
                                        <h5 class="card-title mb-9 fw-semibold"> Tăng trưởng các tháng trong năm </h5>
                                        <h4 class="fw-semibold mb-3 format-currency"><?php echo e($currentMonthTotal); ?>đ</h4>
                                        <div class="d-flex align-items-center pb-1">
                                            <?php if($percentageChangeMonth > 0): ?>
                                                <span
                                                    class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-arrow-up-left text-success"></i>
                                                </span>
                                            <?php else: ?>
                                                <span
                                                    class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-arrow-down-right text-danger"></i>
                                                </span>
                                            <?php endif; ?>
                                            <p class="text-dark me-1 fs-3 mb-0"><?php echo e($percentageChangeMonth); ?>%</p>
                                            <p class="fs-3 mb-0">tháng trước</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex justify-content-end">
                                            <div
                                                class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-currency-dollar fs-6"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="earning"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Sản phẩm có nhiều lượt xem nhất</h5>
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0 text-center">
                                            <h6 class="fw-semibold mb-0">STT</h6>
                                        </th>
                                        <th class="border-bottom-0 text-center">
                                            <h6 class="fw-semibold mb-0">Tên sản phẩm</h6>
                                        </th>
                                        <th class="border-bottom-0 text-center">
                                            <h6 class="fw-semibold mb-0">Lượt xem</h6>
                                        </th>
                                        <th class="border-bottom-0 text-center">
                                            <h6 class="fw-semibold mb-0">Giá sản phẩm</h6>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $stt = 1;
                                    ?>
                                    <?php $__currentLoopData = $topViewProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="border-bottom-0 text-center">
                                                <h6 class="fw-semibold mb-0"><?php echo e($stt); ?></h6>
                                            </td>
                                            <td class="border-bottom-0 text-center">
                                                <p class="mb-0 fw-normal">
                                                    <?php echo e($product->name); ?>

                                                </p>
                                            </td>

                                            <td class="border-bottom-0 text-center">
                                                <span
                                                    class="badge bg-secondary rounded-3 fw-semibold"><?php echo e($product->view); ?></span>
                                            </td>

                                            <td class="border-bottom-0 text-center">
                                                <p class="mb-0 fw-normal"> <span
                                                        class="format-currency"><?php echo e($product->priceSale); ?>đ</span><del
                                                        style="font-size: 12px"><span
                                                            class="format-currency"><?php echo e($product->price); ?>đ</span></del></p>
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
            <div class="col-lg-4">
                <div class="card overflow-hidden">
                    <div class="card-body p-4">
                        <div id="categories"></div>
                    </div>
                </div>
                <div class="card overflow-hidden">
                    <div class="card-body p-4">
                        <div id="brands"></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <h3 class="text-center mb-4" style="text-decoration: underline;text-transform: uppercase">Sản phẩm lượt bán <span class="text-danger" style="font-weight: 600">cao nhất</span></h3>
            <?php $__currentLoopData = $topSellingProductDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6 col-xl-3">
                    <div class="card overflow-hidden rounded-2">
                        <div class="position-relative">
                            <a href=""><img style="height: 350px"
                                    src="<?php echo e(asset('storage/images/products/' . $itemProduct['product']->image->srcImage)); ?>"
                                    class="card-img-top rounded-0" alt="..."></a>

                            <a href="<?php echo e(route('detailProduct',$itemProduct['product']->id)); ?>"
                                class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                                    class="ti ti-basket fs-4"></i></a>
                        </div>
                        <div class="card-body pt-3 p-4">
                            <h6 class="fw-semibold fs-4"><?php echo e($itemProduct['product']->name); ?></h6>
                            <div class="">
                                <h6 class="fw-semibold fs-4 mb-0"> <span
                                        class="format-currency"><?php echo e($itemProduct['product']->priceSale); ?>đ</span>
                                    <del><span class="format-currency"><?php echo e($itemProduct['product']->price); ?>đ</span></del>
                                </h6>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                    <li><a class="me-1" href="javascript:void(0)">Đã bán: <?php echo e($itemProduct['totalQty']); ?></a></li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>


        
    </div>
<?php $__env->startSection('js'); ?>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            var chartOptions = { // Đổi tên biến thành chartOptions
                series: [{
                    name: "Tổng tiền",
                    data: ['total_revenue']
                }],
                chart: {
                    height: 350,
                    fontFamily: "Plus Jakarta Sans', sans-serif",
                    type: 'line',
                    zoom: {
                        enabled: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'straight'
                },
                title: {
                    text: 'Thống kê thu nhập theo ngày, tháng, năm',
                    align: 'left'
                },
                grid: {
                    row: {
                        colors: ['#f3f3f3', 'transparent'],
                        opacity: 0.5
                    },
                },
                xaxis: {
                    categories: ['date'],
                }
            };
            var apexChart = new ApexCharts(document.querySelector("#chart"), chartOptions);





            
            apexChart.render();
            $("#btn-dashboard-filter").click(function() {

                var _token = $('input[name="_token"]').val();
                var from_date = $('#datepicker').val();
                var to_date = $('#datepicker2').val();
                $.ajax({
                    url: "<?php echo e(route('filter_by_date')); ?>",
                    method: "POST",
                    dataType: "JSON",
                    data: {
                        from_date: from_date,
                        to_date: to_date,
                        _token: _token
                    },
                    success: function(data) {
                        var formattedDates = data.map(function(item) {
                            return item.date;
                        });

                        apexChart.updateOptions({
                            xaxis: {
                                categories: formattedDates
                            },
                            series: [{
                                data: data.map(function(item) {
                                    return item.total_revenue;
                                })
                            }]
                        });
                    }
                });
            });

            $("#datepicker").datepicker({
                dateFormat: "yy-mm-dd"
            });

            $("#datepicker2").datepicker({
                dateFormat: "yy-mm-dd"
            });

            $(".dashboard-filter").change(function() {
                var _token = $('input[name="_token"]').val();
                var selectedOption = $(this).val();
                var fromDate, toDate;

                // Xác định fromDate và toDate dựa trên option được chọn
                if (selectedOption === '7') {
                    toDate = getCurrentDate();
                    fromDate = getPastDate(7);
                } else if (selectedOption === '14') {
                    toDate = getCurrentDate();
                    fromDate = getPastDate(14);
                } else if (selectedOption === '30') {
                    toDate = getCurrentDate();
                    fromDate = getPastDate(30);
                } else if (selectedOption === '90') {
                    toDate = getCurrentDate();
                    fromDate = getPastDate(90);
                }

                $.ajax({
                    url: "<?php echo e(route('filter_by_date')); ?>",
                    method: "POST",
                    dataType: "JSON",
                    data: {
                        from_date: fromDate,
                        to_date: toDate,
                        _token: _token
                    },
                    success: function(data) {
                        var formattedDates = data.map(function(item) {
                            return item.date;
                        });

                        apexChart.updateOptions({
                            xaxis: {
                                categories: formattedDates
                            },
                            series: [{
                                data: data.map(function(item) {
                                    return item.total_revenue;
                                })
                            }]
                        });
                        console.log(data);
                    }
                });
            });

            // Hàm lấy ngày hiện tại (yyyy-mm-dd)
            function getCurrentDate() {
                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth() + 1;
                var yyyy = today.getFullYear();

                if (dd < 10) {
                    dd = '0' + dd;
                }

                if (mm < 10) {
                    mm = '0' + mm;
                }

                return yyyy + '-' + mm + '-' + dd;
            }
            // Hàm lấy ngày quá khứ dựa trên số ngày truyền vào
            function getPastDate(days) {
                var currentDate = new Date();
                currentDate.setDate(currentDate.getDate() - days);
                var dd = currentDate.getDate();
                var mm = currentDate.getMonth() + 1;
                var yyyy = currentDate.getFullYear();

                if (dd < 10) {
                    dd = '0' + dd;
                }

                if (mm < 10) {
                    mm = '0' + mm;
                }

                return yyyy + '-' + mm + '-' + dd;
            }

            function initializeDefaultChart() {
                var _token = $('input[name="_token"]').val();
                var fromDate = getPastDate(30);
                var toDate = getCurrentDate();

                $.ajax({
                    url: "<?php echo e(route('filter_by_date')); ?>",
                    method: "POST",
                    dataType: "JSON",
                    data: {
                        from_date: fromDate,
                        to_date: toDate,
                        _token: _token
                    },
                    success: function(data) {
                        var formattedDates = data.map(function(item) {
                            return item.date;
                        });

                        apexChart.updateOptions({
                            xaxis: {
                                categories: formattedDates
                            },
                            series: [{
                                data: data.map(function(item) {
                                    return item.total_revenue;
                                })
                            }]
                        });
                    }
                });
            }
            // Khởi tạo mặc định cho biểu đồ
            initializeDefaultChart();
        });

        var revenuesDataYear = <?php echo json_encode($revenues, 15, 512) ?>;
        var revenuesDataMonth = <?php echo json_encode($revenuesMonth, 15, 512) ?>;
        var listCategories = <?php echo json_encode($categories, 15, 512) ?>;
        var listBrands = <?php echo json_encode($brands, 15, 512) ?>;
        // Thống kê so sánh năm này và năm trước
        var totalRevenuesYear = revenuesDataYear.map(item => parseFloat(item.total_revenue));
        console.log(totalRevenuesYear)
        var breakup = {
            color: "#adb5bd",
            series: totalRevenuesYear,
            labels: revenuesDataYear.map(item => item.year),
            chart: {
                width: 180,
                type: "donut",
                fontFamily: "Plus Jakarta Sans', sans-serif",
                foreColor: "#adb0bb",
            },
            plotOptions: {
                pie: {
                    startAngle: 0,
                    endAngle: 360,
                    donut: {
                        size: '75%',
                    },
                },
            },
            stroke: {
                show: false,
            },
            dataLabels: {
                enabled: false,
            },
            legend: {
                show: false,
            },
            colors: ["#5D87FF", "#ecf2ff", "#F9F9FD"],
            responsive: [{
                breakpoint: 991,
                options: {
                    chart: {
                        width: 200,
                    },
                },
            }],
            tooltip: {
                theme: "dark",
                fillSeriesColor: false,
            },
        };
        // Tạo biểu đồ ApexCharts với dữ liệu và tùy chọn từ controller
        var chart = new ApexCharts(document.querySelector("#breakup"), breakup);
        chart.render();
        // Thống kê tháng trong năm
        var earning = {
            chart: {
                id: "sparkline3",
                type: "area",
                height: 60,
                sparkline: {
                    enabled: true,
                },
                group: "sparklines",
                fontFamily: "Plus Jakarta Sans', sans-serif",
                foreColor: "#adb0bb",
            },
            series: [{
                name: "Tổng tiền",
                color: "#49BEFF",
                data: revenuesDataMonth.map(item => item.total_revenue),
            }, ],
            stroke: {
                curve: "smooth",
                width: 2,
            },
            fill: {
                colors: ["#f3feff"],
                type: "solid",
                opacity: 0.05,
            },

            markers: {
                size: 0,
            },
            tooltip: {
                theme: "dark",
                fixed: {
                    enabled: true,
                    position: "right",
                },
                x: {
                    show: false,
                },
            },
        };
        new ApexCharts(document.querySelector("#earning"), earning).render();

        //Thống kê loại sản phẩm
        var chartCategories = {
            series: listCategories.map(item => item.qty),
            labels: listCategories.map(item => item.name),
            chart: {
                type: 'donut',
            },
            stroke: {
                colors: ['#fff']
            },
            fill: {
                opacity: 0.8
            },
            dataLabels: {
                enabled: false
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        show: false
                    }
                }
            }],
        };

        var chart = new ApexCharts(document.querySelector("#categories"), chartCategories);
        chart.render();

        // Thống kê hãng sản phẩm
        var chartBrands = {
            series: listBrands.map(item => item.qty),
            labels: listBrands.map(item => item.name),
            chart: {
                type: 'donut',
            },
            stroke: {
                colors: ['#fff']
            },
            fill: {
                opacity: 0.8
            },
            dataLabels: {
                enabled: false
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        show: false
                    }
                }
            }],
        };

        var chart = new ApexCharts(document.querySelector("#brands"), chartBrands);
        chart.render();
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laragon\www\ban-quan-ao\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>