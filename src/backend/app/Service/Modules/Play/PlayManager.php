<?php

namespace App\Service\Modules\Play;

use App\Contract\Repository\PlayRepositoryInterface;
use App\Contract\Manager\ManagerInterface;
use App\Decorator\CalendarDecorator;
use App\Http\Requests\PlayRequest;

class PlayManager implements ManagerInterface
{
    protected PlayRepositoryInterface $repository;

    public function __construct(PlayRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function play(PlayRequest $request)
    {
        return $this->repository->play($request);
    }

    public function history()
    {
        return $this->repository->history();
    }

    public function calendar()
    {
        $previousDate = \Carbon\Carbon::today()->subDays(30);
        $addedDate = \Carbon\Carbon::today()->addDays(30);

        $calendar = $this->repository->calendar($previousDate, $addedDate);

        return (new CalendarDecorator($calendar))->decorate();
    }
}
