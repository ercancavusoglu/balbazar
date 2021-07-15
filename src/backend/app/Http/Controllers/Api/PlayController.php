<?php

namespace App\Http\Controllers\Api;

use App\Contract\Service\PlayServiceInterface;
use App\Http\Requests\PlayRequest;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponser;

class PlayController extends Controller
{
    use ApiResponser;

    /** @var PlayServiceInterface $service * */
    protected PlayServiceInterface $service;

    public function __construct(PlayServiceInterface $service)
    {
        $this->service = $service;
    }

    public function play(PlayRequest $request)
    {
        try {
            return $this->success($this->service->play($request));
        } catch (\Exception $exception) {
            return $this->error($exception->getMessage());
        }
    }

    public function history()
    {
        try {
            return $this->success($this->service->history());
        } catch (\Exception $exception) {
            return $this->error($exception->getMessage());
        }
    }

    public function calendar()
    {
        try {
            return $this->success($this->service->calendar());
        } catch (\Exception $exception) {
            return $this->error($exception->getMessage());
        }
    }
}
