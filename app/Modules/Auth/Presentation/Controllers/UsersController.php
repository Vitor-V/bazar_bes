<?php

namespace App\Modules\Auth\Presentation\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\Domain\UseCase\CreateUser;
use App\Modules\Auth\Presentation\Requests\CreateUserRequest;
use App\Modules\Auth\Presentation\Resources\SessionResource;
use Exception;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function store(CreateUser $useCase, CreateUserRequest $request)
    {
        try {
            return DB::transaction(function () use ($useCase, $request) {
                return SessionResource::make($useCase->execute($request));
            });
        } catch (Exception $e) {
         DB::rollBack();
         throw $e;
        }
    }
}
