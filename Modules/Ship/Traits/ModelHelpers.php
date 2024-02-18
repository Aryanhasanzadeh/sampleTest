<?php

namespace Traits;

trait ModelHelpers
{
    public static function getTableName(): string
    {
        return (new static())->getTable();
    }

    public static function getMorphClassName(): string
    {
        return (new static())->getMorphClass();
    }
}
