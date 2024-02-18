<?php

namespace Exceptions;

use Modules\Ship\Parents\Exceptions\ParentException;
use Symfony\Component\HttpFoundation\Response;

class AuthenticationException extends ParentException
{
    protected $code = Response::HTTP_UNAUTHORIZED;

    public function setDefaultMessage(): string
    {
        return __('ship::exceptions.user_not_authenticate_exception');
    }
}
