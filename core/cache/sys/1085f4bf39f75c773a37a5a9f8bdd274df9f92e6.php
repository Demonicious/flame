<?php defined('APP_PATH') || exit('Direct Access is Prohibited.'); ?>



<?php $__env->startSection('title', "404 Page Not Found."); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <span id="title">404 Page Not Found.</span>
    <div class="text">
        <p>The resource you're looking for does not exist.</p>
        <br>
        <p><a href="https://flame.github.io" target="_blank">Take Me Home</a></p>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_new\htdocs\flame_public\core\views/error_404.blade.php ENDPATH**/ ?>