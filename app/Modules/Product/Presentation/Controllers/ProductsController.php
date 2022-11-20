<?php

namespace App\Modules\Product\Presentation\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Product\Data\Dao\Product;
use App\Modules\Product\Presentation\ApiUseCases\CreateProductRequest;
use App\Modules\Product\Presentation\ApiUseCases\CreateProductResource;
use App\Modules\Product\Presentation\ApiUseCases\CreateProductUseCase;
use App\Modules\Product\Presentation\ApiUseCases\ListProductsUseCase;
use App\Modules\Product\Presentation\DestroyProduct\DestroyProductResource;
use App\Modules\Product\Presentation\DestroyProduct\DestroyProductUseCase;
use App\Modules\Product\Presentation\Resources\ProductResource;
use App\Modules\Product\Presentation\UpdateProduct\UpdateProductApiUseCase;
use App\Modules\Product\Presentation\UpdateProduct\UpdateProductRequest;
use App\Modules\Product\Presentation\UpdateProduct\UpdateProductResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function store(CreateProductUseCase $useCase, CreateProductRequest $request)
    {
        return DB::transaction(function () use ($useCase, $request) {
            try {
                return CreateProductResource::make($useCase->execute($request));
            } catch (\Exception $exception) {
                DB::rollBack();
                throw $exception;
            }
        });
    }


    public function index(Request $request, ListProductsUseCase $useCase)
    {
        return ProductResource::collection($useCase->execute($request));
    }

    public function show(Request $request, int $id)
    {
        return ProductResource::make(Product::query()->findOrFail($id));
    }

    public function update(UpdateProductApiUseCase $useCase, UpdateProductRequest $request, int $id)
    {
        return UpdateProductResource::make($useCase->execute($request, $id));
    }

    public function destroy(DestroyProductUseCase $useCase, Request $request, int $id)
    {
        return DestroyProductResource::make($useCase->execute($request, $id));
    }
}
