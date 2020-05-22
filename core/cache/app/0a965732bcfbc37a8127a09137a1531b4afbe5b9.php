<?php defined('APP_PATH') || exit('Direct Access is Prohibited.'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="A Website built using Flame." />
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <?php echo $__env->yieldContent('styles'); ?>
    </head>
    <body>
        <div id="app">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html><?php /**PATH C:\xampp_new\htdocs\flame_public\app\views/layout/app.blade.php ENDPATH**/ ?>