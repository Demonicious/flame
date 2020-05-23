<?php defined('APP_PATH') || exit('Direct Access is Prohibited.');

class Flame {
    static function View($name, $data = array(), $core = false) {
        global $views;
        global $s_views;
        $text = null;
        if(!$core) {
            $text = $views->render($name, $data);
        } else {
            $text = $s_views->render($name, $data);
        }
    
        return new FlameView($text);
    }

    static function Config($name) {
        global $config;
        require_once APP_PATH.'/'.$config['paths']['config'].'/'.$name.'.php';
        return true;
    }

    static function ConfigItem($item) {
        global $config;
        return isset($config[$item]) ? $config[$item] : null;
    }

    static function Model($name) {
        global $config;
        require_once APP_PATH.'/'.$config['paths']['models'].'/'.$name.'.php';
        $model = new $name();
        return $model;
    }

    static function Library($name) {
        global $config;
        require_once APP_PATH.'/'.$config['paths']['libraries'].$name.'.php';
        $lib = new $name();
        return $lib;
    }

    static function Service($name) {
        require_once SYS_PATH.'/services/'.$name.'.php';
        $service = new $name();
        return $service;
    }

    static function Helper($name) {
        global $config;
        if(file_exists(SYS_PATH.'/system/helpers/'.$name.'.helper.php')) {
            require_once SYS_PATH.'/system/helpers/'.$name.'.helper.php';
        } else if(APP_PATH.'/'. $config['paths']['helpers'] .'/'.$name.'.php') {
            require_once APP_PATH.'/'. $config['paths']['helpers'] .'/'.$name.'.helper.php';
        }
    }

    static function Instance() {
        $instance = new StdClass();
        $instance->Server = $_SERVER;
        $instance->Request = $_REQUEST;
        $instance->Headers = getallheaders();
        $instance->FormData = new FormData($_GET, $_POST);
        
        return $instance;
    }
}