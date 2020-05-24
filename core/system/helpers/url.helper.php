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

function request_uri() {
    return $_SERVER['REQUEST_URI'];
}

function make_slug($string) {
    $slug = preg_replace('~[^\pL\d]+~u', '-', $string);
    $slug = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);
    $slug = preg_replace('~[^-\w]+~', '', $slug);
    $slug = trim($slug, '-');
    $slug = preg_replace('~-+~', '-', $slug);
    $slug = strtolower($slug);
    if (empty($slug)) {
      return 'n-a';
    }
  
    return $slug;
}