<?php

namespace Modules\User\App\Tasks;

use Modules\Ship\Exceptions\AccessTokenFailedException;
use Modules\Ship\Exceptions\AuthenticationException;
use Modules\Ship\Parents\Tasks\ParentTask;
use Modules\User\App\Dtos\TokenDto;
use Modules\User\Models\User;
use Exception;
class GetAccountAccessTokenTask extends ParentTask
{
    /**
     * create jwt token for user
     *
     * @throws AuthenticationException
     */
    public function run(User $user): TokenDto
    {
        try {
            if ($token = auth()->login($user)){
                return TokenDto::from([
                    'token' => $token
                ]);
            }

            throw new Exception();
        }catch (Exception){
            throw new AuthenticationException();
        }
    }
}
