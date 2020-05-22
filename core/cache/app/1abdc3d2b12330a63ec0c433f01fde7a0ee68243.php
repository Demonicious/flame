<?php defined('APP_PATH') || exit('Direct Access is Prohibited.'); ?>



<?php $__env->startSection('title', 'Welcome to your New Site.'); ?>
<?php $__env->startSection('styles'); ?>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Sen, sans-serif;
            background: #f5f5f5;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
        }

        #title {
            color: #ee4323;
            text-shadow: 0px 1px 0px black;
            font-size: 2rem;
            font-weight: 800;
            padding: 15px 0;
            letter-spacing: 2px;
        }

        .text {
            padding: 15px;
        }

        .text p {
            color: #333333;
            font-size: 1.2rem;
        }

        code {
            background: #d8d8d8;
            padding: 2px 4px;
            border-radius: 4px;
        }

        a {
            color: #ee4323;
            text-decoration: underline;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <span id="title">Flame. - A PHP Micro-Framework</span>
        <div class="text">
            <p>Welcome to your new Flame Application.<br>This page confirms that the Framework was mounted successfully without any issues.</p>
            <br>
            <p>This view is stored at <code>app/views/homepage.blade.php</code> • This page was rendered by <code>app/controllers/MainController.php</code></p>
            <p>During development mode, You can check the JavaScript console to view page-render times.</p>
            <br>
            <p><a href="https://flame.github.io" target="_blank">Website & User-guide</a> • <a href="https://github.com/demonicious/flame" target="_blank">GitHub</a> • <a href="https://laravel.com/docs/5.8/blade" target="_blank">Laravel Blade Docs</a></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_new\htdocs\flame_public\app\views/homepage.blade.php ENDPATH**/ ?>