<?php

namespace App\Inputs;

use App\Inputs\InputAbstract;


class Text extends InputAbstract
{



    public function render(): string
    {
        return <<<HTML
<input type="text" name="{$this->name}"/>
HTML;
    }
}
