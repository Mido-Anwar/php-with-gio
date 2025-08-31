<?php

namespace App\View;

use App\Config\Config;

class View
{

    public function __construct(
        protected string $view,
        protected array $params = []
    ) {}

    public static function make(string $view, array $params = []): static
    {

        return new static($view, $params);
    }

    public function render(): bool|string
    {
        $path = Config::$viewsPath . $this->view . '.php';

        if (!file_exists($path)) {
            return "View Not Found";
        }
        // foreach($this->params as $key =>$value){
        //     $$key= $value;
        // }
        extract($this->params);
        ob_start();
        include $path ;
        return ob_get_clean();
    }

    public function __toString(): string
    {
        return $this->render();
    }

    public function __get($name)
    {
        return $this->params[$name] ?? null;
    }
}
