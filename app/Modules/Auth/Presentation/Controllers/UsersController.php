<?php

namespace App\Modules\Auth\Presentation\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\Domain\Resources\CreateUserResource;
use App\Modules\Auth\Domain\UseCase\CreateUser;
use App\Modules\Auth\Presentation\Requests\CreateUserRequest;
use App\Modules\Auth\Presentation\Resources\UserResource;
use App\Modules\Auth\Presentation\UpdateUser\UpdateUserRequest;
use App\Modules\Auth\Presentation\UpdateUser\UpdateUserResource;
use App\Modules\Auth\Presentation\UpdateUser\UpdateUserUseCase;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * @throws Exception
     */
    public function store(CreateUser $useCase, CreateUserRequest $request)
    {
        try {
            return DB::transaction(function () use ($useCase, $request) {
                return CreateUserResource::make($useCase->execute($request));
            });
        } catch (Exception $e) {
         DB::rollBack();
         throw $e;
        }
    }

    public function index(Request $request): UserResource
    {
        return UserResource::make($request->user());
    }

    public function update(UpdateUserUseCase $useCase, UpdateUserRequest $request, int $id): UpdateUserResource
    {
        return UpdateUserResource::make($useCase->execute($request, $id));
    }

    public function destroy(Request $request): UserResource
    {
        return UserResource::make($request->user());
    }
}
