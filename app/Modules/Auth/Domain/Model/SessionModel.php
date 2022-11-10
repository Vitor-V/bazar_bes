<?php

namespace App\Modules\Auth\Domain\Model;

use App\Modules\Auth\Data\Dao\User;

class SessionModel
{
    public ?string $token;
    public ?User $user;

    public function __construct(?string $token = null, ?User $user = null)
    {
        $this->token = $token;
        $this->user = $user;
    }
}
