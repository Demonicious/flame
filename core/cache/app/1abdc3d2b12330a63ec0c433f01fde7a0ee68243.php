<?php defined('APP_PATH') || exit('Direct Access is Prohibited.'); ?>



<?php $__env->startSection('title', 'Welcome to your New Site.'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <img width="128" src="<?php echo e(base_url()); ?>/assets/img/flame-512.png" alt="logo" />
        <span id="title">flame.</span>
        <div class="text">
            <p>Welcome to your new Flame Application.<br>This page confirms that the Framework was mounted successfully without any issues.</p>
            <br>
            <p>This view is stored at <code>app/views/homepage.blade.php</code> • This page was rendered by <code>app/controllers/MainController.php</code></p>
            <p>During development mode, You can check the JavaScript console to view useful debugging information.</p>
            <br>
            <p><a href="https://flame.github.io" target="_blank">Website & User-guide</a> • <a href="https://github.com/demonicious/flame" target="_blank">GitHub</a> • <a href="https://laravel.com/docs/5.8/blade" target="_blank">Laravel Blade Docs</a></p>
        </div>
        <p><?php echo e(is_https()); ?></p>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_new\htdocs\flame_public\app\views/homepage.blade.php ENDPATH**/ ?>