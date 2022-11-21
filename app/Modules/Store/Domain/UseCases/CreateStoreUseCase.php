<?php

namespace App\Modules\Store\Domain\UseCases;

use App\Modules\Product\Domain\Exceptions\AnyStoreException;
use App\Modules\Store\Data\Dao\Store;
use App\Modules\Store\Data\Dao\UserStore;
use App\Modules\Store\Presentation\Requests\CreateStoreRequest;

class CreateStoreUseCase
{
    public function execute(CreateStoreRequest $request)
    {

        $store = new Store($request->validated());
        $store->save();

        $user = $request->user();
        $user->store_id = $store->id;
        $user->save();

        return $store;
    }
}
