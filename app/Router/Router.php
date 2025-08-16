<?php

declare(strict_types=1);

namespace App\Router;

use App\Router\RouteFoundException;

class Router
{
    private array $routes = []; // نبتديها بمصفوفة فاضية

    // لتسجيل المسار والـ action
    public function register(string $route, callable|array $action): self
    {
        $this->routes[$route] = $action;
        return $this; // عشان نقدر نعمل method chaining
    }

    // لحل المسار المطلوب وتنفيذ الـ action
    public function resolve(string $requestUri)
    {
        // نشيل أي query string زي ?id=10
        $route = explode("?", $requestUri)[0];

        // نشوف هل المسار مسجّل؟
        $action = $this->routes[$route] ?? null;

        if (! $action) {
            throw new RouteFoundException("Route [$route] not found");
        }

        // هنا بيتنفذ الـ callback اللي سجّلناه
        return call_user_func($action);
    }
}
