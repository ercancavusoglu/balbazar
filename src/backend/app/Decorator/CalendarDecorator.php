<?php

namespace App\Decorator;

class CalendarDecorator extends AbstractPlayDecoratorBase
{
    public function decorate($isMonthly = true)
    {
        if (!$isMonthly) {
            $days = $this->getDatesFromCurrentYear(date('Y'));
        } else {
            $days = $this->getDatesFromCurrentMonth(date('m'), date('Y'));
        }

        foreach ($this->data as $item) {
            if (isset($days[$item['date']])) {
                $days[$item['date']] = true;
            }
        }

        return $days;
    }

    protected function getDatesFromCurrentMonth($month, $year): array
    {
        $num = date('t', mktime(0, 0, 0, $month, 1, $year));

        $dates_month = array();

        for ($i = 1; $i <= $num; $i++) {
            $mktime = mktime(0, 0, 0, $month, $i, $year);
            $date = date("Y-m-d", $mktime);
            $dates_month[$date] = false;
        }

        return $dates_month;
    }

    protected function getDatesFromCurrentYear($year): array
    {
        $dates_month = array();

        for ($i = 1; $i <= 12; $i++) {
            for ($j = 1; $j <= 31; $j++) {
                $mktime = mktime(0, 0, 0, $i, $j, $year);
                $date = date("Y-m-d", $mktime);
                $dates_month[$date] = false;
            }
        }

        return $dates_month;
    }
}
