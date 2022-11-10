<?php

namespace App\Modules\Auth\Domain\UseCase;

use App\Modules\Auth\Data\Dao\User;
use App\Modules\Auth\Presentation\Requests\CreateUserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CreateUser
{
    public function execute(CreateUserRequest $request)
    {
        $user = new User($request->validated());
        $user->save();

        Auth::login($user);

        $session = new CreateSession();

        return $session->execute($user);
    }
}
