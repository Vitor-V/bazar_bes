<?php

namespace App\Modules\Auth\Domain\Model;

use Illuminate\Contracts\Auth\Authenticatable;

class SessionModel
{
    public ?string $token;
    public ?Authenticatable $user;

    public function __construct(?string $token = null, ?Authenticatable $user = null)
    {
        info(json_encode($user));
        $this->token = $token;
        $this->user = $user;
    }
}
