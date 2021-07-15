<?php

namespace App\Decorator;

abstract class AbstractPlayDecoratorBase
{
    protected array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    abstract public function decorate();
}
