<?php defined('APP_PATH') || exit('Direct Access is Prohibited.'); ?>

<script type="text/javascript">
    function RenderTimes($page_load) {
        this.seconds = parseFloat($page_load);
        this.milliseconds = parseFloat($page_load * 1000);
    }

    console.group('Flame');
    console.log('Flame uses a JS Script to provide debugging data. This allows you to check page render times, check the Module Loading Log & More.')
    console.groupEnd();

    console.group('Page Rendering Times');
    console.table(new RenderTimes(`<?php echo e($page_load); ?>`));
    console.groupEnd();

    console.group('Loader Log');
    <?php $__currentLoopData = $loaded; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        console.log(`<?php echo e($module['msg']); ?>`)
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    console.groupEnd();
</script><?php /**PATH C:\xampp_new\htdocs\flame_public\core\views/debug_script.blade.php ENDPATH**/ ?>