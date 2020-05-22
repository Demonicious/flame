<?php defined('APP_PATH') || exit('Direct Access is Prohibited.'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="A Website built using Flame." />
        <title>@yield('title')</title>
        @yield('styles')
    </head>
    <body>
        <div id="app">
            @yield('content')
        </div>
    </body>
</html>