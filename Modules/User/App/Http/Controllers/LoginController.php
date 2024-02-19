<?php

namespace Modules\User\App\Http\Controllers;


use Illuminate\Http\JsonResponse;
use Modules\Ship\Exceptions\AuthenticationException;
use Modules\Ship\Exceptions\NotFoundException;
use Modules\Ship\Parents\Controllers\ParentApiController;
use Modules\User\App\Actions\LoginAction;
use Modules\User\App\Dtos\LoginDto;
use Modules\User\App\Http\Requests\LoginRequest;
use Modules\User\App\Http\Resources\TokenResource;

class LoginController extends ParentApiController
{
    public function __construct(private readonly LoginAction $loginAction)
    {
    }

    /**
     * Handel Login process
     *
     * @throws NotFoundException
     * @throws AuthenticationException
     */
    public function __invoke(LoginRequest $request): JsonResponse
    {
        $user = $this->loginAction->run(LoginDto::from($request->validated()));

        return $this->response(TokenResource::make($user));
    }
}
