<?php

namespace App\Repositories\Eloquent;

use App\Contract\Repository\MeditationRepositoryInterface;
use App\Models\Meditation;

class MeditationRepository extends BaseRepository implements MeditationRepositoryInterface
{
    public function __construct(Meditation $model)
    {
        parent::__construct($model);
    }

    public function all()
    {
        return $this->model
            ->select(['id', 'name', 'image', 'description', 'producer', 'duration'])
            ->where('is_active', 1)
            ->get()
            ->toArray();
    }
}
