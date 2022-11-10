<?php

namespace App\Modules\Customer\Presentation\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\Presentation\Requests\LoginRequest;
use App\Modules\Auth\Presentation\Resources\LoginResource;
use App\Modules\Auth\Presentation\Resources\SessionResource;
use App\Modules\Customer\Domain\UseCases\CreateCustomerUseCase;
use App\Modules\Customer\Domain\UseCases\CustomerLoginUseCase;
use App\Modules\Customer\Presentation\Requests\CreateCustomerRequest;
use Exception;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    public function login(CustomerLoginUseCase $useCase, LoginRequest $request)
    {
        return LoginResource::make($useCase->execute($request));
    }


    public function store(CreateCustomerUseCase $useCase, CreateCustomerRequest $request)
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
