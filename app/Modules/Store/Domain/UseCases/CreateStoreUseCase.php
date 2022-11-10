<?php

namespace App\Modules\Store\Domain\UseCases;

use App\Modules\Store\Data\Dao\Store;
use App\Modules\Store\Data\Dao\UserStore;
use App\Modules\Store\Presentation\Requests\CreateStoreRequest;

class CreateStoreUseCase
{
    public function execute(CreateStoreRequest $request)
    {
        $store = new Store($request->validated());
        $store->save();


        $userStore = new UserStore();
        $userStore->user_id = $request->user()->id;
        $userStore->store_id = $store->id;
        $userStore->save();

        return $store;
    }
}
