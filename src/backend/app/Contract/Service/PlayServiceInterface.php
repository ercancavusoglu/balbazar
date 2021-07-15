<?php

namespace App\Contract\Service;

use App\Http\Requests\PlayRequest;

interface PlayServiceInterface
{
    public function play(PlayRequest $request);

    public function history();

    public function calendar();
}
