<?php

namespace App\Modules\Auth\Domain\UseCase;

use App\Modules\Auth\Data\Dao\User;
use App\Modules\Auth\Presentation\Requests\CreateUserRequest;


class CreateUser
{
    public function execute(CreateUserRequest $request)
    {
        $user = new User($request->validated());
        $user->save();

        $session = new CreateSession();
        return $session->execute($user, $request);
    }
}
