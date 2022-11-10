<?php

namespace App\Modules\Auth\Contract;

use Illuminate\Support\Arr;

trait TokenGenerator
{

    /***
     * Token em Upercase de 6 caracteres
     * @return string
     */

    static function execute(): string
    {
        $seed = bcrypt(rand(100000, 999999));

        $tokenInit = rtrim(strtr(base64_encode($seed), '+/', '-_'), '=');

        $tokenArray = str_split($tokenInit);

        $tokenKeys = [];

        $limit = 6;

        for ($i = 0; $i < $limit; $i++) {
            $tokenKeys[] = Arr::random($tokenArray);
        }

        return strtoupper(implode('', $tokenKeys));
    }
}
