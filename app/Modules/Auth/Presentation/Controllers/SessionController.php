<?php

namespace App\Modules\Auth\Presentation\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\Domain\UseCase\LoginUseCase;
use App\Modules\Auth\Presentation\Logout\LogoutResource;
use App\Modules\Auth\Presentation\Logout\LogoutUseCase;
use App\Modules\Auth\Presentation\Requests\LoginRequest;
use App\Modules\Auth\Presentation\Resources\LoginResource;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function store(LoginUseCase $useCase, LoginRequest $request)
    {
        return LoginResource::make($useCase->execute($request));
    }

    public function destroy(LogoutUseCase $useCase, Request $request)
    {
        return LogoutResource::make($useCase->execute($request));
    }
}
