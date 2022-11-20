<?php

namespace App\Modules\Auth\Presentation\Logout;

use Illuminate\Http\Request;

class LogoutUseCase
{
    public function execute(Request $request)
    {
        $request->user()->tokens()->delete();
        return;
    }
}
