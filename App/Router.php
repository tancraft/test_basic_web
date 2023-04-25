<?php

namespace App;

class Router
{
    private $routes = [];

    public function get($path, $callback)
    {
        $this->routes[] = [
            'path' => $path,
            'method' => 'GET',
            'callback' => $callback
        ];
    }

    public function post($path, $callback)
    {
        $this->routes[] = [
            'path' => $path,
            'method' => 'POST',
            'callback' => $callback
        ];
    }

    public function dispatch()
    {
        $path = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes as $route) {
            if ($route['path'] === $path && $route['method'] === $method) {
                $callback = $route['callback'];
                if (is_callable($callback)) {
                    echo call_user_func($callback);
                } else {
                    $parts = explode('@', $callback);
                    $className = 'App\\Controller\\' . $parts[0];
                    $methodName = $parts[1];
                    $controller = new $className();
                    echo $controller->$methodName();
                }
                return;
            }
        }

        http_response_code(404);
        echo 'Page not found';
    }
}

