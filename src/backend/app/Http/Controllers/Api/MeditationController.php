<?php

namespace App\Http\Controllers\Api;

use App\Contract\Service\MeditationServiceInterface;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponser;

class MeditationController extends Controller
{
    use ApiResponser;

    /** @var MeditationServiceInterface $service * */
    protected MeditationServiceInterface $service;

    public function __construct(MeditationServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * Get All Active Meditations
     *
     * @return mixed
     */
    public function list()
    {
        try {
            return $this->success($this->service->list());
        } catch (\Exception $exception) {
            return $this->error($exception->getMessage());
        }
    }
}
