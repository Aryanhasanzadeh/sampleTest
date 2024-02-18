<?php

use Illuminate\Support\Facades\DB;
use Traits\MockHelpersTrait;

abstract class ParentAction
{
    use MockHelpersTrait;

    public function transactionalRun(...$arguments)
    {
        return DB::transaction(function () use ($arguments) {
            return static::run(...$arguments);
        });
    }
}
