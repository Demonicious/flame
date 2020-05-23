<?php defined('APP_PATH') || exit('Direct Access is Prohibited.');

function GetCaller($back_trace) {   
    $caller = new StdClass();
    $caller->class = isset($back_trace[1]['class']) ? $back_trace[1]['class'] : "FlameCore";
    $caller->function = isset($back_trace[1]['function']) ? $back_trace[1]['function'] : "Autoload";

    return $caller;
}

class Flame {
    static function View($name, $data = array(), $core = false) {
        global $loaded;
        global $views;
        global $s_views;
        $text = null;

        $bt = GetCaller(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2));
        if(!$core) {
            $text = $views->render($name, $data);
            array_push($loaded, array('type' => 'views', 'msg' => '[VIEW] ' . $name . ' View loaded by: ' . $bt->class . '::' . $bt->function.'.'));
        } else {
            $text = $s_views->render($name, $data);
            array_push($loaded, array('type' => 'views', 'msg' => '[SYS VIEW] ' . $name . ' System View loaded by: ' . $bt->class . '::' . $bt->function.'.'));
        }
    
        return new FlameView($text);
    }

    static function Config($name) {
        global $config;
        global $loaded;
        require_once APP_PATH.'/'.$config['paths']['config'].'/'.$name.'.php';
        $bt = GetCaller(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2));
        array_push($loaded, array('type' => 'configs', 'msg' => '[CONFIG] ' . $name . ' Config loaded by: ' . $bt->class . '::' . $bt->function.'.'));
        return true;
    }

    static function ConfigItem($item) {
        global $config;
        return isset($config[$item]) ? $config[$item] : null;
    }

    static function Model($name) {
        global $config;
        global $loaded;
        require_once APP_PATH.'/'.$config['paths']['models'].'/'.$name.'.php';
        $bt = GetCaller(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2));
        array_push($loaded, array('type' => 'models', 'msg' => '[MODEL] ' . $name . ' Model loaded by: ' . $bt->class . '::' . $bt->function.'.'));
        $model = new $name();
        return $model;
    }

    static function Library($name) {
        global $config;
        global $loaded;
        require_once APP_PATH.'/'.$config['paths']['libraries'].$name.'.php';
        $bt = GetCaller(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2));
        array_push($loaded, array('type' => 'libraries', 'msg' => '[LIBRARY] ' . $name . ' Library loaded by: ' . $bt->class . '::' . $bt->function.'.'));
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
        global $loaded;
        $bt = GetCaller(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2));
        if(file_exists(SYS_PATH.'/system/helpers/'.$name.'.helper.php')) {
            require_once SYS_PATH.'/system/helpers/'.$name.'.php';
            array_push($loaded, array('type' => 'helpers', 'msg' => '[SYS HELPER] ' . $name . ' System Helper loaded by: ' . $bt->class . '::' . $bt->function.'.'));
        } else if(APP_PATH.'/'. $config['paths']['helpers'] .'/'.$name.'.php') {
            require_once APP_PATH.'/'. $config['paths']['helpers'] .'/'.$name.'.helper.php';
            array_push($loaded, array('type' => 'helpers', 'msg' => '[HELPER] ' . $name . ' Helper loaded by: ' . $bt->class . '::' . $bt->function.'.'));
        }
    }

    static function Instance() {
        global $loaded;
        $bt = GetCaller(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2));
        $instance = new StdClass();
        $instance->Server = $_SERVER;
        $instance->Request = $_REQUEST;
        $instance->Headers = getallheaders();
        $instance->FormData = new FormData($_GET, $_POST);
        array_push($loaded, array('type' => 'instances', 'msg' => '[INSTANCE]' . 'New Instance Created by: ' . $bt->class . '::' . $bt->function.'.'));
        return $instance;
    }
}