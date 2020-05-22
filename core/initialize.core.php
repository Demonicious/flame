<?php defined('APP_PATH') || exit('Direct Access is Prohibited.');

$routes['GET']['/'] = $routes['settings']['default_controller'].'::'.$routes['settings']['default_method'];

use Jenssegers\Blade\Blade;
$views = new Blade(APP_PATH.'/'.$config['paths']['views'], SYS_PATH.'/cache/app');
$s_views = new Blade(SYS_PATH.'/'.$config['paths']['views'], SYS_PATH.'/cache/sys');