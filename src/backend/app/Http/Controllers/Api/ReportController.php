<?php

namespace App\Http\Controllers\Api;

use App\Contract\Service\ReportServiceInterface;
use App\Traits\ApiResponser;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    use ApiResponser;

    /** @var ReportServiceInterface $reportService * */
    protected ReportServiceInterface $reportService;

    public function __construct(ReportServiceInterface $reportService)
    {
        $this->reportService = $reportService;
    }

    public function yearly()
    {
        try {
            return $this->success($this->reportService->yearly());
        } catch (\Exception $exception) {
            return $this->error($exception->getMessage());
        }
    }

    public function monthly()
    {
        try {
            return $this->success($this->reportService->monthly());
        } catch (\Exception $exception) {
            return $this->error($exception->getMessage());
        }
    }
}
