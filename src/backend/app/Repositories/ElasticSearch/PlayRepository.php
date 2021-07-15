<?php

namespace App\Repositories\ElasticSearch;

use App\Contract\Repository\PlayRepositoryInterface;
use App\Http\Requests\PlayRequest;

class PlayRepository implements PlayRepositoryInterface
{
    public function play(PlayRequest $request)
    {
        return [];
    }

    public function history()
    {
        return [];
    }

    public function calendar()
    {
        return [];
    }
}
