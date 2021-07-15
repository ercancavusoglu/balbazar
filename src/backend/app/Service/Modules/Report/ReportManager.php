<?php

namespace App\Service\Modules\Report;

use App\Contract\Manager\ManagerInterface;
use App\Contract\Repository\PlayRepositoryInterface;
use App\Decorator\CalendarDecorator;
use App\Service\Modules\Common\AbstractManager;

class ReportManager extends AbstractManager implements ManagerInterface
{
    protected PlayRepositoryInterface $playRepository;

    public function __construct(PlayRepositoryInterface $playRepository)
    {
        $this->playRepository = $playRepository;
    }

    public function monthly(): array
    {
        $startedAt = new \DateTime('00:00:00');
        $startedAt->modify('first day of this month');

        $finishedAt = new \DateTime('00:00:00');
        $finishedAt->modify('last day of this month');

        return $this->getReport($startedAt, $finishedAt);
    }

    public function yearly(): array
    {
        $startedAt = new \DateTime('00:00:00');
        $startedAt->modify('first day of January this year');

        $finishedAt = new \DateTime('00:00:00');
        $finishedAt->modify('last day of December this year');

        return $this->getReport($startedAt, $finishedAt, false);
    }

    protected function getReport(\DateTime $startedAt, \DateTime $finishedAt, bool $isMonthly = true)
    {
        $stats = $this->playRepository->stats($startedAt, $finishedAt);

        $calendar = $this->playRepository->calendar($startedAt, $finishedAt);

        $calendar = (new CalendarDecorator($calendar))->decorate($isMonthly);

        $series = DayCounter::calculateSeries($calendar);

        return [
            'total_duration' => (int)$stats->totalDuration,
            'total_meditation' => $stats->totalMeditation,
            'daily_series' => $series
        ];
    }
}
