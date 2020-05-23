<?php defined('APP_PATH') || exit('Direct Access is Prohibited.'); ?>

@extends('layout.app')

@section('title', 'Welcome to your New Site.')

@section('content')
    <div class="container">
        <img width="128" src="{{ base_url() }}/assets/img/flame-512.png" alt="logo" />
        <span id="title">flame.</span>
        <div class="text">
            <p>Welcome to your new Flame Application.<br>This page confirms that the Framework was mounted successfully without any issues.</p>
            <br>
            <p>This view is stored at <code>app/views/homepage.blade.php</code> • This page was rendered by <code>app/controllers/MainController.php</code></p>
            <p>During development mode, You can check the JavaScript console to view useful debugging information.</p>
            <br>
            <p><a href="https://flame.github.io" target="_blank">Website & User-guide</a> • <a href="https://github.com/demonicious/flame" target="_blank">GitHub</a> • <a href="https://laravel.com/docs/5.8/blade" target="_blank">Laravel Blade Docs</a></p>
        </div>
    </div>
@endsection