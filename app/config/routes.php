<?php defined('APP_PATH') || exit('Direct Access is Prohibited.');

// You can enable / disable specific HTTP Methods, aswell as assign a default controller / method for the router;
$routes['settings'] = array(
    'default_controller' => 'MainController',
    'default_method' => 'index',
    'allowed_methods' => array('GET', 'POST'),
);

/*
    1.) Define Routes as such :-
        $routes['HTTP_METHOD']['/path/to/resource'] = 'ControllerName::HandlerMethod';

    2.) Add URI Parameters to your Routes as Such :-
        $routes['GET']['/users/{id}] = 'UserController::GetUser';

    3.) You may also use Regex to allow / disallow character sets :-
        $routes['GET']['/users/{id:\d+}'] = 'UserController::GetUser';

    The parameters can be received in the method by adding a $params argument to the definition;
    Flame uses Nikic/FastRoute as it's router, So head on over to: https://github.com/nikic/FastRoute for a complete usage guide. 

*/