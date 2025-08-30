<?php

use Psr\Container\ContainerInterface;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;


class Container implements ContainerInterface
{

    public function get($id) {}
    public function has(string $id): bool
    {
        return true;
    }
}
