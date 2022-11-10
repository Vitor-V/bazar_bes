<?php

namespace App\Modules\Auth\Domain\UseCase;

use App\Modules\Auth\Contract\TokenGenerator;
use App\Modules\Auth\Data\Dao\User;
use App\Modules\Auth\Domain\Model\SessionModel;
use App\Modules\Customer\Data\Dao\Customer;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CreateSession
{
    public function execute(Authenticatable $user, Request $request)
    {
        $request->setUserResolver(function () use ($user) {
            return $user;
        });

        switch ($user) {
            case $user instanceof User;
                $userType = 'user';
                break;

            case $user instanceof Customer;
                $userType = 'customer';
                break;
        }

        $token = $request->user()->createToken('api_token', [$userType]);

        return new SessionModel($token->plainTextToken, $user);
    }

    /**
     * Cria um novo token, remove os antigos e salva o novo no banco
     * @param User|null $user
     * @param string $ip
     * @return string
     */
    protected function createAndStoreToken(?User $user, string $ip): string
    {
        $lastSignInAt = Carbon::now();
        $user->last_sign_in_at = $lastSignInAt;

        // Cria um novo token de acesso
        $token = str_replace('=', '', Crypt::encrypt($user->email));
        $accessTokens = $user->access_tokens;
        $accessTokens[] = [
            'token' => $token,
            'created_at' => $lastSignInAt->toDateTimeString(),
            'expires_at' => null,
        ];

        // Remove os tokens mais antigos
        $length = count($accessTokens);
        $accessTokens = array_slice($accessTokens, $length > 10 ? $length - 10 : 0);
        $user->access_tokens = $accessTokens;

        // Atualiza o ip
        if ($ip && $ip != $user->ip) {
            $user->last_sign_in_ip = $ip;
        }

        $user->save();
        return $token;
    }
}
