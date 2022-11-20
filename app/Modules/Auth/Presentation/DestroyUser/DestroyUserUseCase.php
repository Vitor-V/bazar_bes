<?php

namespace App\Modules\Auth\Presentation\DestroyUser;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class DestroyUserUseCase
{

    public function execute(int $id)
    {
        $user = Auth::user();
        if ($user->id != $id) {
            throw new ModelNotFoundException();
        }

        $user->delete();

        $user->tokens()->delete();

        return $user;
    }
}
