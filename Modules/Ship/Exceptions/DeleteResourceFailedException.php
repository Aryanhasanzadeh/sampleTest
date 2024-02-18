<?php

namespace Exceptions;

use Modules\Ship\Parents\Exceptions\ParentException;
use Symfony\Component\HttpFoundation\Response;

class DeleteResourceFailedException extends ParentException
{
    protected $code = Response::HTTP_EXPECTATION_FAILED;

    public function setDefaultMessage(): string
    {
        return __('ship::exceptions.delete_resource_failed_exception');
    }
}
