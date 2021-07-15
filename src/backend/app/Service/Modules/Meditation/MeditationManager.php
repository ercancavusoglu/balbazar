<?php

namespace App\Service\Modules\Meditation;

use App\Contract\Repository\MeditationRepositoryInterface;
use App\Contract\Manager\ManagerInterface;
use App\Traits\ApiResponser;

class MeditationManager implements ManagerInterface
{
    use ApiResponser;

    protected MeditationRepositoryInterface $repository;

    public function __construct(MeditationRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function list()
    {
        return $this->repository->all();
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }
}
