<?php

namespace App\Contract\Parameters;

interface ChainParametersInterface
{
    public function isCompleted(): bool;

    public function setLastException(\Throwable $exception): self;

    public function getLastException(): ?\Throwable;
}
