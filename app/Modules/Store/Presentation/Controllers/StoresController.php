<?php

namespace App\Modules\Store\Presentation\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Store\Domain\UseCases\CreateStoreUseCase;
use App\Modules\Store\Domain\UseCases\ListStoreUseCase;
use App\Modules\Store\Presentation\Api\CreateStoreResource;
use App\Modules\Store\Presentation\Requests\CreateStoreRequest;
use App\Modules\Store\Presentation\Resources\StoreResource;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StoresController extends Controller
{
    /**
     * @throws Exception
     */
    public function store(CreateStoreUseCase $useCase, CreateStoreRequest $request)
    {
        try {
            return DB::transaction(function () use ($useCase, $request) {
                return CreateStoreResource::make($useCase->execute($request));
            });
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function index(ListStoreUseCase $useCase, Request $request)
    {
        return StoreResource::collection($useCase->execute($request));
    }
}
