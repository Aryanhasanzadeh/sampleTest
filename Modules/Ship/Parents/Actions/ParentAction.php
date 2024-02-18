<?php

namespace Modules\Ship\Parents\Actions;

use Illuminate\Support\Facades\DB;
use Modules\Ship\Traits\MockHelpersTrait;

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
