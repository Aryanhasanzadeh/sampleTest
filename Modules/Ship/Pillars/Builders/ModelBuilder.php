<?php

namespace Modules\Ship\Pillars\Builders;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder as SpatieQueryBuilder;

class ModelBuilder extends SpatieQueryBuilder
{
    /**
     * Create a new instance of the class statically.
     */
    public static function new(Builder $builder, ?Request $request = null): SpatieQueryBuilder
    {
        return new self($builder, $request);
    }
}
