<?php

namespace Modules\User\App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Modules\Ship\Exceptions\AuthenticationException;
use Modules\Ship\Parents\Controllers\ParentApiController;
use Modules\User\App\Actions\LoginOutAction;

class LoginOutController extends ParentApiController
{
    public function __construct(private readonly LoginOutAction $loginOutAction)
    {
    }

    /**
     * Handel Logout Process
     *
     * @throws AuthenticationException
     */
    public function __invoke(): JsonResponse
    {
        $this->loginOutAction->run();

        return $this->emptyData();
    }
}
