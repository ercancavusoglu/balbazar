<?php

namespace App\Service;

use App\Contract\Service\PlayServiceInterface;
use App\Http\Requests\PlayRequest;
use App\Service\Modules\Play\PlayManager;

class PlayService implements PlayServiceInterface
{
    private PlayManager $manager;

    public function __construct(PlayManager $PlayManager)
    {
        $this->manager = $PlayManager;
    }

    public function play(PlayRequest $request)
    {
        return $this->manager->play($request);
    }

    public function history()
    {
        return $this->manager->history();
    }

    public function calendar()
    {
        return $this->manager->calendar();
    }
}
