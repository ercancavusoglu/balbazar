<?php

namespace App\Decorator;

class ArrayDecorator extends AbstractPlayDecoratorBase
{
    public function decorate()
    {
        return $this->data;
    }
}
