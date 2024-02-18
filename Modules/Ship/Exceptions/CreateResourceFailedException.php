<?php

namespace Modules\Ship\Exceptions;

use Modules\Ship\Parents\Exceptions\ParentException;
use Symfony\Component\HttpFoundation\Response;

class CreateResourceFailedException extends ParentException
{
    protected $code = Response::HTTP_EXPECTATION_FAILED;

    public function setDefaultMessage(): string
    {
        return __('ship::exceptions.create_resource_failed_exception');
    }
}
