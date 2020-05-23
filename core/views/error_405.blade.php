<?php defined('APP_PATH') || exit('Direct Access is Prohibited.'); ?>

@extends('layout.app')

@section('title', "405 Invalid Method.")

@section('content')
<div class="container">
    <span id="title">405 Invalid Method.</span>
    <div class="text">
        <p>The desired resource exists in another castle.</p>
        <br>
        <p><a href="https://flame.github.io" target="_blank">Take Me Home</a></p>
    </div>
</div>
@endsection