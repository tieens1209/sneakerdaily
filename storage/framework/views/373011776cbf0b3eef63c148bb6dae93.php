<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hóa Đơn</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        h3 {
            color: #e44d26;
            margin-bottom: 20px;
        }
        table {
            width: 100%;        
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 15px;
            border: 1px solid #dee2e6;
            text-align: center;
        }
        th {
            height: 50px;
            text-align: center;
            background-color: #f8f9fa;
        }
        tbody td {
            background-color: #f9f9f9;
        }
        tfoot th, tfoot td {
            background-color: #e44d26;
            color: #fff;
        }
        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 1px solid #e44d26;
        }
        .discount-row, .total-row {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h3>MaleFashion</h3>
    <p>Cảm ơn bạn đã chọn mua sắm tại MaleFashion. Dưới đây là chi tiết hóa đơn của bạn cùng với lời cảm ơn chân thành từ chúng tôi.</p>
    <table border="1">
        <thead>
            <th>ID Đơn Hàng</th>
            <th>Tên Người Đặt Hàng</th>
            <th>Địa Chỉ</th>
            <th>Số Điện Thoại</th>
            <th>Trạng Thái Thanh Toán</th>
            <th>Phương Thức Thanh Toán</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo e($bill->id); ?></td>
                <td><?php echo e($bill->user->fullname); ?></td>
                <td><?php echo e($bill->user->address); ?></td>
                <td><?php echo e($bill->user->phone); ?></td>
                <td>
                    <?php if($bill->pay == 1): ?>
                        <span style="color: green;">Đã Thanh Toán</span>
                    <?php else: ?>
                        <span style="color: red;">Chưa Thanh Toán</span>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if($bill->paymentMethod == 1): ?>
                        Thanh Toán qua VNPay
                    <?php elseif($bill->paymentMethod == 0): ?>
                        Thanh Toán khi Nhận Hàng
                    <?php endif; ?>
                </td>
            </tr>
        </tbody>
    </table>
    <hr>
    <table border="1">
        <thead>
            <th>Tên Sản Phẩm</th>
            <th>Giá</th>
            <th>Số Lượng</th>
            <th>Kích Thước</th>
            <th>Tổng Tiền</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($cart->product->name); ?></td>
                    <td><?php echo e(number_format($cart->product->priceSale, 0, ',', '.')); ?> VNĐ</td>
                    <td><?php echo e($cart->qty); ?></td>
                    <td><?php echo e($cart->size); ?></td>
                    <td><?php echo e(number_format($cart->total, 0, ',', '.')); ?> VNĐ</td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <tr class="discount-row">
                <td colspan="4">Giảm giá</td>
                <td><?php echo e(number_format($totalBill - $bill->total, 0, ',', '.')); ?> VNĐ</td>
            </tr>
            <tr class="total-row">
                <th colspan="4">Tổng đơn hàng</th>
                <th><?php echo e(number_format($bill->total, 0, ',', '.')); ?> VNĐ</th>
            </tr>
        </tfoot>
    </table>
</body>
</html>
<?php /**PATH D:\laragon\laragon\www\ban-quan-ao\resources\views/mail/billPDF.blade.php ENDPATH**/ ?>