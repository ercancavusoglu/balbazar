<?php

namespace App\Service;

use App\Contract\Service\UserServiceInterface;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Service\Modules\Login\LoginManager;
use App\Service\Modules\Register\RegisterManager;

class UserService implements UserServiceInterface
{
    private RegisterManager $registerManager;
    private LoginManager $loginManager;

    public function __construct(
        LoginManager $loginManager,
        RegisterManager $registerManager
    )
    {
        $this->loginManager = $loginManager;
        $this->registerManager = $registerManager;
    }

    public function login(LoginRequest $request)
    {
        return $this->loginManager->login($request);
    }

    public function register(RegisterRequest $request)
    {
        return $this->registerManager->register($request);
    }

    public function logout()
    {
        return $this->loginManager->logout();
    }
}
