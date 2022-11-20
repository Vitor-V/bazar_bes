<?php

namespace App\Modules\Store\Presentation\UpdateStore;

use App\Modules\Store\Data\Dao\Store;

class UpdateStoreUseCase
{
    public function execute(UpdateStoreRequest $request, int $id)
    {
        $store = Store::query()->findOrFail($id);
        $store->fill($request->validated());

        return $store;
    }
}
