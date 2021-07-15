<?php

namespace App\Contract\Service;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

interface UserServiceInterface
{
    public function login(LoginRequest $request);

    public function register(RegisterRequest $request);

    public function logout();
}
