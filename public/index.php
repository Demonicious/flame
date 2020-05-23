<?php

$is_dev = false;
$start_time = null;
$end_time = null;
$loaded = array();

require_once "../vendor/autoload.php";

/*
    'DEVELOPMENT'
    'PRODUCTION'
*/

$env = 'DEVELOPMENT';

switch($env) {
    case 'DEVELOPMENT':
        error_reporting(-1);
        $start_time = microtime(true);
        $is_dev = true;
    break;
    case 'PRODUCTION':
    default:
        error_reporting(0);
}

// Top Level Directory Paths:
$prev_dir = '/../';
$app_dir = 'app';
$core_dir = 'core';
$cfg_path = $app_dir.'/'.'config';

// Path Constants
define('BASE_PATH', __DIR__.$prev_dir);
define('APP_PATH',  BASE_PATH.$app_dir);
define('SYS_PATH',  BASE_PATH.$core_dir);
define('CFG_PATH',  BASE_PATH.$cfg_path);

$config = array();
$routes = array('settings' => array('allowed_methods' => array()));
require_once CFG_PATH.'/app.php';
require_once CFG_PATH.'/db.php';
require_once CFG_PATH.'/paths.php';
require_once CFG_PATH.'/routes.php';

/* Start - Application Process */
require_once SYS_PATH.'/initialize.core.php';
require_once SYS_PATH.'/system/FormData.php';
require_once SYS_PATH.'/system/FlameController.php';
require_once SYS_PATH.'/system/FlameModel.php';
require_once SYS_PATH.'/system/FlameView.php';
if(!$is_dev) require_once SYS_PATH.'/lazy_loader.core.php';
else require_once SYS_PATH.'/dev/lazy_loader.dev.core.php';

foreach($config['autoload']['helpers'] as $helper) {
    Flame::Helper($helper);
}

require_once SYS_PATH.'/router.core.php';
/* End - Application Process */

if($is_dev) {
    require_once SYS_PATH.'/dev/process.php';
}
