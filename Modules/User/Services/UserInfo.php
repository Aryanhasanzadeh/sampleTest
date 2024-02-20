<?php

namespace Modules\User\Services;

use Modules\Ship\Parents\Services\ParentService;
use Modules\User\Models\User;

class UserInfo extends ParentService
{
    public static function new(): self
    {
        return new self();
    }

    public function getUser(int $id): User
    {
        return User::find($id);
    }
}
