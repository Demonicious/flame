<?php defined('APP_PATH') || exit('Direct Access is Prohibited.');

$routes['GET']['/'] = $routes['settings']['default_controller'].'::'.$routes['settings']['default_method'];

use Jenssegers\Blade\Blade;

$views = new Blade(APP_PATH.'/'.$config['paths']['views'], SYS_PATH.'/cache/app');
$s_views = new Blade(SYS_PATH.'/'.$config['paths']['views'], SYS_PATH.'/cache/sys');


require_once SYS_PATH.'/system/FormData.php';
require_once SYS_PATH.'/system/FlameController.php';
require_once SYS_PATH.'/system/FlameModel.php';
require_once SYS_PATH.'/system/FlameView.php';

if(!$is_dev) require_once SYS_PATH.'/lazy_loader.core.php';
else require_once SYS_PATH.'/dev/lazy_loader.dev.core.php';

foreach($config['autoload']['helpers'] as $helper) {
    Flame::Helper($helper);
}