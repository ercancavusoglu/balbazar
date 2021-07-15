<?php

namespace App\Contract\Repository;

use App\Http\Requests\PlayRequest;

interface PlayRepositoryInterface
{
    public function play(PlayRequest $request);

    public function history();

    public function calendar(\DateTimeInterface $previousDate, \DateTimeInterface $addedDate);
}
