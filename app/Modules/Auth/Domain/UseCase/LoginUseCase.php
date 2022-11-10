<?php

namespace App\Modules\Auth\Domain\UseCase;

use App\Modules\Auth\Domain\Exceptions\LoginException;
use App\Modules\Auth\Presentation\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;


class LoginUseCase
{
    public function execute(LoginRequest $request)
    {
        $isAuth = Auth::guard('user')->attempt($request->validated());
        if (!$isAuth) {
            throw new LoginException();
        }
        $user = Auth::guard('user')->user();

        $session = new CreateSession();

        return $session->execute($user, $request);
    }
}
