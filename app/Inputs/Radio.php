<?php

namespace App\Inputs;

use App\Inputs\InputAbstract;

class Radio extends InputAbstract
{


    public function render(): string
    {
        return <<<HTML
<input type="radio" name="{$this->name}"/>
HTML;
    }
}
