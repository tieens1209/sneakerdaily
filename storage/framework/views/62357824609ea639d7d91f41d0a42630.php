<div style="width=600px; margin: 0 auto">
    <div style="text-align: center">
        <h2>Hi, <?php echo e($data['name']); ?></h2>
        <p>This email helps you recover your forgotten account password</p>
        <p>Please click on the link below to reset your password</p>
        <p><a href="<?php echo e(route('newPassword', ['id' => $data['id'], 'token' => $data['token']] )); ?>">Password retrieval</a></p>
    </div>
</div><?php /**PATH C:\Users\ndm10\Desktop\WEB4013 - Lap trinh PHP3\Lab\Assignment\PRJ-MFashion\resources\views/mail/forgotPassword.blade.php ENDPATH**/ ?>