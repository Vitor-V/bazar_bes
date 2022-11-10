<?php

namespace App\Modules\Customer\Domain\UseCases;

use App\Modules\Auth\Domain\Exceptions\LoginException;
use App\Modules\Auth\Domain\UseCase\CreateSession;
use App\Modules\Auth\Presentation\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class CustomerLoginUseCase
{
    public function execute(LoginRequest $request)
    {
        $isAuth = Auth::guard('customer')->attempt($request->validated());
        if (!$isAuth) {
            throw new LoginException();
        }
        $user = Auth::guard('customer')->user();

        $session = new CreateSession();

        return $session->execute($user, $request);
    }
}
