<?php

namespace App\Service;

use App\Contract\Service\MeditationServiceInterface;
use App\Service\Modules\Meditation\MeditationManager;

class MeditationService implements MeditationServiceInterface
{
    private MeditationManager $manager;

    public function __construct(MeditationManager $meditationManager)
    {
        $this->manager = $meditationManager;
    }

    public function list()
    {
        return $this->manager->list();
    }
}
