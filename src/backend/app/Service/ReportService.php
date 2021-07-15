<?php

namespace App\Service;

use App\Contract\Service\ReportServiceInterface;
use App\Service\Modules\Report\ReportManager;

class ReportService implements ReportServiceInterface
{
    protected ReportManager $reportManager;

    public function __construct(ReportManager $reportManager)
    {
        $this->reportManager = $reportManager;
    }

    public function yearly()
    {
        return $this->reportManager->yearly();
    }

    public function monthly()
    {
        return $this->reportManager->monthly();
    }
}
