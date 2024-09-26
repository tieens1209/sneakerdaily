<div style="width:600px; margin: 0 auto">
    <div style="text-align: center">
        <h2>Xin chào, <?php echo e($data['name']); ?></h2>
        <p>Email này giúp bạn khôi phục mật khẩu tài khoản đã quên</p>
        <p>Vui lòng nhấp vào liên kết bên dưới để đặt lại mật khẩu của bạn</p>
        <p><a href="<?php echo e(route('newPassword', ['id' => $data['id'], 'token' => $data['token']] )); ?>">Khôi phục mật khẩu</a></p>
    </div>
</div><?php /**PATH D:\laragon\laragon\www\ban-quan-ao\resources\views/mail/forgotPassword.blade.php ENDPATH**/ ?>