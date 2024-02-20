<?php

namespace Modules\User\App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Modules\Ship\Parents\Controllers\ParentApiController;
use Modules\User\App\Http\Resources\UserResource;
use Modules\User\Models\User;

class UserInfoController extends ParentApiController
{
    public function __invoke(User $user): JsonResponse
    {
        return $this->response(UserResource::make($user));
    }
}
