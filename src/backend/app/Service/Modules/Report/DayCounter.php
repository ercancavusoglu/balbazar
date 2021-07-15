<?php

namespace App\Service\Modules\Report;

class DayCounter
{
    public static function calculateSeries(array $data): int
    {
        $i = 0;
        $previousDateStatus = false;
        $bestSeries = 0;

        foreach ($data as $datum) {
            if (!$datum) {
                $i = 0;
                continue;
            }

            if ($previousDateStatus) {
                $i++;
            }

            if ($i >= $bestSeries) {
                $bestSeries = $i + 1;
            }

            $previousDateStatus = $datum;
        }

        return $bestSeries;
    }
}
