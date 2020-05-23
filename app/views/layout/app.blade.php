<?php defined('APP_PATH') || exit('Direct Access is Prohibited.'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="A Website built using Flame." />
        <title>@yield('title')</title>
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
                color: #658eff;
                text-shadow: 0px 1px 0px black;
                font-size: 2rem;
                font-weight: 800;
                padding: 30px 0;
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
                color: #658eff;
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div id="app">
            @yield('content')
        </div>
    </body>
</html>