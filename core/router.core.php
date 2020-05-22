<?php defined('APP_PATH') || exit('Direct Access is Prohibited.');

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $router) {
    global $routes;
    foreach($routes['settings']['allowed_methods'] as $method) {
        if(isset($routes[$method]))
            foreach($routes[$method] as $route => $handler) {
                $router->addRoute($method, $route, $handler);
            }
    }
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        Flame::View('method_not_allowed', $data = array(), true)->Render();
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        Flame::View('method_not_allowed', $data = array(), true)->Render();
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = explode('::', $routeInfo[1]);
        $vars = $routeInfo[2];
        $controller = $handler[0];
        $method = $handler[1];

        require_once APP_PATH.'/'.$config['paths']['controllers'].'/'.$controller.'.php';
        $node = new $controller();
        $node->$method($vars);
        break;
}