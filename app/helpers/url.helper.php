<?php defined('APP_PATH') || exit('Direct Access is Prohibited.');

function is_https() {
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS' === 'on']);
}

function base_url($uri = null) {
    return Flame::ConfigItem('base_url');
}

function current_url() {
    $url = (is_https() ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    return $url;
}

function current_uri() {
    return $_SERVER['REQUEST_URI'];
}