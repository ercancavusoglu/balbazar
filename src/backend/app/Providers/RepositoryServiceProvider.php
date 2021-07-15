<?php

namespace App\Providers;

use App\Contract\Decorator\MeditationDecoratorInterface;
use App\Contract\Repository\EloquentRepositoryInterface;
use App\Contract\Repository\MeditationRepositoryInterface;
use App\Contract\Repository\UserRepositoryInterface;
use App\Contract\Repository\PlayRepositoryInterface;
use App\Contract\Service\MeditationServiceInterface;
use App\Contract\Service\PlayServiceInterface;
use App\Contract\Service\ReportServiceInterface;
use App\Contract\Service\UserServiceInterface;
use App\Decorator\Meditation\EloquentDecorator;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\Eloquent\MeditationRepository;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\Eloquent\PlayRepository;
use App\Service\MeditationService;
use App\Service\PlayService;
use App\Service\ReportService;
use App\Service\UserService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Services
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(MeditationServiceInterface::class, MeditationService::class);
        $this->app->bind(PlayServiceInterface::class, PlayService::class);
        $this->app->bind(ReportServiceInterface::class, ReportService::class);


        // Repositories
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(MeditationRepositoryInterface::class, MeditationRepository::class);
        $this->app->bind(PlayRepositoryInterface::class, PlayRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
