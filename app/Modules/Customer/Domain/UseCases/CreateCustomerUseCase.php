<?php

namespace App\Modules\Customer\Domain\UseCases;

use App\Modules\Auth\Domain\UseCase\CreateSession;
use App\Modules\Customer\Data\Dao\Customer;
use App\Modules\Customer\Presentation\Requests\CreateCustomerRequest;

class CreateCustomerUseCase
{
    public function execute(CreateCustomerRequest $request)
    {
        $customer = new Customer($request->validated());
        $customer->save();

        $session = new CreateSession();
        return $session->execute($customer, $request);
    }
}
