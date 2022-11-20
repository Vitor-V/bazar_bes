<?php

namespace App\Modules\Auth\Presentation\UpdateUser;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class UpdateUserUseCase
{
    public function execute(UpdateUserRequest $request, int $id)
    {
        $user = Auth::user();
        if ($user->id != $id) {
            throw new ModelNotFoundException();
        }
        $user->fill($request->validated());
        $user->save();
        return $user;
    }
}
