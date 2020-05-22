<?php defined('APP_PATH') || exit('Direct Access is Prohibited.'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <div id="app">
            @yield('content')
        </div>
    </body>
</html>