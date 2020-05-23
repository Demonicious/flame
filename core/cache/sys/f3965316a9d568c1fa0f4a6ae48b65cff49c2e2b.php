<?php defined('APP_PATH') || exit('Direct Access is Prohibited.'); ?>



<?php $__env->startSection('title', "404 Error."); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <span id="title">405 Invalid Method.</span>
    <div class="text">
        <p>The desired resource exists in another castle.</p>
        <br>
        <p><a href="https://flame.github.io" target="_blank">Take Me Homepage</a></p>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_new\htdocs\flame_public\core\views/method_not_allowed.blade.php ENDPATH**/ ?>