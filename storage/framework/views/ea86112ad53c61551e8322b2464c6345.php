<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <style>
        *{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 10px;
        }
        table {
            width: 100%;        
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border: 1px solid #dee2e6;
            text-align: center;
        }
        th {
            height: 40px;
            text-align: left;
            text-align: center;
        }
    </style>
</head>
<body>
    <h3 style="color: red">Male Fashion</h3>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Orderer's name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Pay</th>
            <th>Payment method</th>
        </thead>
        <tbody>
            <td><?php echo e($bill->id); ?></td>
            <td><?php echo e($bill->user->fullname); ?></td>
            <td><?php echo e($bill->user->address); ?></td>
            <td><?php echo e($bill->user->phone); ?></td>
            <td>
                <?php if($bill->pay == 1): ?>
                Paid 
                <?php else: ?>
                Unpaid
                <?php endif; ?>
            </td>
            <td>
                <?php if($bill->paymentMethod == 1): ?>
                Payment via vnpay
                <?php elseif($bill->paymentMethod == 0): ?>
                Payment on delivery
                <?php endif; ?>
            </td>
        </tbody>
    </table>
    <hr>
    <table border="1">
        <thead>
            <th>Product name</th>
            
            <th>Price</th>
            <th>Quantity</th>
            <th>Size</th>
            <th>Total</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($cart->product->name); ?></td>
                    
                    <td>$<?php echo e($cart->product->priceSale); ?></td>
                    <td><?php echo e($cart->qty); ?></td>
                    <td><?php echo e($cart->size); ?></td>
                    <td>$<?php echo e($cart->total); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">Discounted</td>
                <td>$<?php echo e($totalBill - $bill->total); ?></td>
            </tr>
            <tr>
                <th colspan="4">Total order</th>
                <th>$<?php echo e($bill->total); ?></th>
            </tr>
        </tfoot>
    </table>
</body>
</html><?php /**PATH C:\Users\ndm10\Desktop\WEB4013 - Lap trinh PHP3\Lab\Assignment\PRJ-MFashion\resources\views/mail/billPDF.blade.php ENDPATH**/ ?>