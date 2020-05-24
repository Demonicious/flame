<?php defined('APP_PATH') || exit('Direct Access is Prohibited.');

$config['app'] = array(
    'name'         => 'Flame',
    'description'  => 'A PHP MVC Micro-Framework',
    'type'         => 'project',
    'license'      => 'MIT',
    'author'       => array(
        'name'     => 'Mudassar Islam',
        'email'    => 'demoncious@gmail.com',
        'homepage' => 'https://demonicious.dev',
        'github'   => 'https://github.com/demonicious'
    ),
);

$config['base_url'] = '//demon.proj/'; // Set this to the Base URL of your Application.

$config['autoload'] = array(
    'services'  => array(), // The names of Service: 'session', 'db' 
    'models'    => array(), // The names of the user defined models.
    'libraries' => array(), // The names of the user defined libraries.
    'helpers'   => array(), // The names of the user defined / core helpers.
);