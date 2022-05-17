<?php

namespace Engine\Router;

use Exception;

class Router
{
    private $routes = [];
    

    public function add(string $url, string $controller, string $method): void
    {
        $this->routes[] = [
            'route' => $url,
            'controller' => $controller,
            'action' => $method
        ];
    }

    public function match(string $url): array
    {
        foreach ($this->routes as $route){
            if (preg_match_all($route['route'], $url)){
                return $route;
            }
        }
        throw new \LogicException("Route not found. " . $url);
    }
}