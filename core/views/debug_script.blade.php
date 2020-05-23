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
    console.table(new RenderTimes(`{{ $page_load }}`));
    console.groupEnd();

    console.group('Loader Log');
    @foreach ($loaded as $module)
        console.log(`{{ $module['msg'] }}`)
    @endforeach
    console.groupEnd();
</script>