<?php

namespace Modules\User\App\Tasks;

use Modules\Ship\Exceptions\NotFoundException;
use Modules\Ship\Parents\Tasks\ParentTask;
use Modules\User\App\Dtos\LoginDto;
use Exception;
use Modules\User\Models\User;

class FindUserByPhoneTask extends ParentTask
{
    /**
     * Find User by phone
     *
     * @throws NotFoundException
     */
    public function run(LoginDto $data): User|null
    {
        try {
            return User::where('phone', $data->phone)
                ->first();
        } catch (Exception) {
            throw new NotFoundException();
        }

    }
}
