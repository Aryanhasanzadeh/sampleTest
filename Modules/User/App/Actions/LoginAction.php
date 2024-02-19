<?php

namespace Modules\User\App\Actions;

use Illuminate\Support\Facades\Hash;
use Modules\Ship\Exceptions\AuthenticationException;
use Modules\Ship\Exceptions\NotFoundException;
use Modules\Ship\Parents\Actions\ParentAction;
use Modules\User\App\Dtos\LoginDto;
use Modules\User\App\Dtos\TokenDto;
use Modules\User\App\Tasks\FindUserByPhoneTask;
use Modules\User\App\Tasks\GetAccountAccessTokenTask;

class LoginAction extends ParentAction
{
    public function __construct(
        public readonly FindUserByPhoneTask       $findUserByPhoneTask,
        public readonly GetAccountAccessTokenTask $getAccountAccessTokenTask
    )
    {
    }

    /**
     * Handel Login process
     *
     * @throws NotFoundException
     * @throws AuthenticationException
     */
    public function run(LoginDto $data): TokenDto
    {
        $user = $this->findUserByPhoneTask->run($data);
        if ($user && Hash::check($data->password, $user->password)) {
            return $this->getAccountAccessTokenTask->run($user);
        } else {
            throw new NotFoundException();
        }
    }
}
