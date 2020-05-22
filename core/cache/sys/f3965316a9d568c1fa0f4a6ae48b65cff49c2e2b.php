<?php defined('APP_PATH') || exit('Direct Access is Prohibited.'); ?>



<?php $__env->startSection('title', "Access Denied."); ?>

<?php $__env->startSection('content'); ?>
    <p>You request to view this resource was denied.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_new\htdocs\flame_public\core\views/method_not_allowed.blade.php ENDPATH**/ ?>