<?php

namespace App\Modules\Store\Presentation\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Store\Data\Dao\Store;
use App\Modules\Store\Domain\UseCases\CreateStoreUseCase;
use App\Modules\Store\Domain\UseCases\ListStoreUseCase;
use App\Modules\Store\Presentation\Api\CreateStoreResource;
use App\Modules\Store\Presentation\DestroyStore\DestroyStoreResource;
use App\Modules\Store\Presentation\DestroyStore\DestroyStoreUseCase;
use App\Modules\Store\Presentation\Requests\CreateStoreRequest;
use App\Modules\Store\Presentation\Resources\StoreResource;
use App\Modules\Store\Presentation\UpdateStore\UpdateStoreRequest;
use App\Modules\Store\Presentation\UpdateStore\UpdateStoreResource;
use App\Modules\Store\Presentation\UpdateStore\UpdateStoreUseCase;
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

    public function index(ListStoreUseCase $useCase, Request $request): StoreResource
    {
        return StoreResource::make($useCase->execute($request));
    }

    public function show(Request $request, int $id): StoreResource
    {
        return StoreResource::make(Store::query()->findOrFail($id));
    }

    public function update(UpdateStoreUseCase $useCase, UpdateStoreRequest $request, int $id): UpdateStoreResource
    {
        return UpdateStoreResource::make($useCase->execute($request, $id));
    }

    public function destroy(DestroyStoreUseCase $useCase, int $id)
    {
        return DestroyStoreResource::make($useCase->execute($id));
    }
}
