<?php

namespace App\Contract\Repository;

interface MeditationRepositoryInterface
{
    public function all();

    public function find($id);
}
