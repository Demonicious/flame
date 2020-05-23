<?php defined('APP_PATH') || exit('Direct Access is Prohibited.'); ?>

@extends('layout.app')

@section('title', "404 Page Not Found.")

@section('content')
<div class="container">
    <span id="title">404 Page Not Found.</span>
    <div class="text">
        <p>The resource you're looking for does not exist.</p>
        <br>
        <p><a href="https://flame.github.io" target="_blank">Take Me Home</a></p>
    </div>
</div>
@endsection