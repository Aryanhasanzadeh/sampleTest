<?php

namespace Modules\Ship\Exceptions;

use Symfony\Component\HttpFoundation\Response;

class NotFoundException extends ParentException
{
    protected $code = Response::HTTP_NOT_FOUND;

    public function setDefaultMessage(): string
    {
        return __('ship::exceptions.not_found_exception');
    }
}
