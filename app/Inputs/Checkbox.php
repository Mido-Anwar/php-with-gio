<?php

namespace App\Inputs;

use App\Inputs\InputAbstract;

class Checkbox extends InputAbstract
{

    public function render(): string
    {
        return <<<HTML
<input type="checkbox" name="{$this->name}"/>
HTML;
    }
}
