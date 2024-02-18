<?php

namespace Modules\Ship\Parents\Services;

use Mockery;
use Mockery\MockInterface;

abstract class ParentService
{
    /**
     * Get the mock object of the class.
     */
    public static function mock(): MockInterface
    {
        $mock = Mockery::mock(static::class);

        app()->singleton(static::class, fn () => $mock);

        return $mock;
    }
}
