<?php

namespace Modules\User\App\Actions;

use Modules\Ship\Exceptions\AuthenticationException;
use Modules\Ship\Parents\Actions\ParentAction;
use Exception;

class LoginOutAction extends ParentAction
{
    /**
     * Handel Logout Process
     *
     * @throws AuthenticationException
     */
    public function run(): void
    {
        try {
            auth()->logout();

        }catch (Exception)
        {
            throw new AuthenticationException();
        }
    }
}
