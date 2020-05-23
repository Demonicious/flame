<?php defined('APP_PATH') || exit('Direct Access is Prohibited.');

$data = array(
    'page_load' => (microtime(true) - $start_time),
    'loaded' => $loaded
);

Flame::View('debug_script', $data, true)->Render();