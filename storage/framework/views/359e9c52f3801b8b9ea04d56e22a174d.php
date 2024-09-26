<div style="width:600px; margin: 0 auto">
    <div style="text-align: center">
        <h2>Xin chào, <?php echo e($data['name']); ?></h2>
        <p>Email này giúp bạn xác thực địa chỉ email của bạn</p>
        <p>Vui lòng nhấp vào liên kết bên dưới để tiếp tục:</p>
        <p><a href="<?php echo e(route('verifiEmail', ['email' => $data['email'], 'token' => $data['token']] )); ?>">Xác thực Email</a></p>
    </div>
</div><?php /**PATH F:\laragon\www\ban-quan-ao\resources\views/mail/verifiEmail.blade.php ENDPATH**/ ?>