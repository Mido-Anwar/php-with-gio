<?php


namespace App\Inputs;


abstract class  InputAbstract

{

    public function __construct(protected string $name) {
        
    }


    abstract  public function render(): string;
}
