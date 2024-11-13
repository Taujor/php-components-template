<?php

namespace Taujor\Parkstars;

use FastRoute\RouteCollector;

$dispatcher = \FastRoute\simpleDispatcher(function(RouteCollector $r) {

    $r->get('/', function() {
        require_once __DIR__ . '/../src/templates/home.php';
        echo home();
    });

    $r->addRoute('GET', '/public/{file:.+}', function($vars) {
        $filePath = __DIR__ . '/../public/' . $vars['file'];
        if (file_exists($filePath)) {
            $mimeType = mime_content_type($filePath);
            switch (pathinfo($filePath, PATHINFO_EXTENSION)) {
                case 'css':
                    header('Content-Type: text/css');
                    break;
                case 'js':
                    header('Content-Type: text/javascript');
                    break;
                case 'json':
                    header('Content-Type: application/json');
                    break;
                default:
                    header('Content-Type: ' . $mimeType);
                    break;
            }
            echo readfile($filePath);
        } else {
            header('HTTP/1.0 404 Not Found');
        }
    });
    
});

// Fetch method and URI from the server variables
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Remove query string and decode URI
if (($pos = strpos($uri, '?')) !== false) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

// Dispatch the request
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

// Handle the route
switch ($routeInfo[0]) {
    case \FastRoute\Dispatcher::NOT_FOUND:
        // Handle 404 Not Found
        break;
    case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // Handle 405 Method Not Allowed
        break;
    case \FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        // Call the handler function or instantiate the controller class
        // and call the corresponding method
        $handler($vars);
        break;
}
