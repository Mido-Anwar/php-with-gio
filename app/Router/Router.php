<?php

declare(strict_types=1);

namespace App\Router;

use App\DataBase\DataBase;
use App\Router\RouteFoundException;

class Router 
{
    private array $routes = [];

    public function register(string $requestMethod, string $route, callable|array $action): self
    {
        $this->routes[$requestMethod][$route] = $action;
        return $this;
    }

    public function get(string $route, callable|array $action ,$params =null): self
    {
        return $this->register('get', $route, $action);
    }

    public function post(string $route, callable|array $action): self
    {
        return $this->register('post', $route, $action);
    }

    public function routes(): array
    {
        return $this->routes;
    }

    public function resolve(string $requestUri, string $requestMethod)
    {
        $route = explode("?", $requestUri)[0];
        $action = $this->routes[$requestMethod][$route] ?? null;

        if (!$action) {
            throw new RouteFoundException("Route [$route] not found");
        }

        // لو الـ action مكتوب بالشكل [ClassName::class, 'method']
        if (is_array($action) && is_string($action[0])) {
            $controller = new $action[0](); // إنشاء object من الكلاس
            return call_user_func([$controller, $action[1]]);
        }

        // الحالة العادية (Closure أو callable)
        return call_user_func($action);
    }
}
