<?php

namespace App\Modules\Product\Presentation\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Product\Presentation\ApiUseCases\CreateProductRequest;
use App\Modules\Product\Presentation\ApiUseCases\CreateProductResource;
use App\Modules\Product\Presentation\ApiUseCases\CreateProductUseCase;
use App\Modules\Product\Presentation\ApiUseCases\ListProductsUseCase;
use App\Modules\Product\Presentation\Resources\ProductResource;
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
}
