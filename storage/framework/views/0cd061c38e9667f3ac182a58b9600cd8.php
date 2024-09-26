<div style="width=600px; margin: 0 auto">
    <div style="text-align: center">
        <h2>Hi, <?php echo e($data['name']); ?></h2>
        <p>This email helps you to get your email authentication back</p>
        <p>Please click the link below to do it</p>
        <p><a href="<?php echo e(route('verifiEmail', ['email' => $data['email'], 'token' => $data['token']] )); ?>">Email verification</a></p>
    </div>
</div><?php /**PATH C:\Users\ndm10\Desktop\WEB4013 - Lap trinh PHP3\Lab\Assignment\PRJ-MFashion\resources\views/mail/verifiEmail.blade.php ENDPATH**/ ?>