<?php

namespace Modules\Ship\Filters;

use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\Filters\Filter;

class OrWhereLikeFilter implements Filter
{
    /**
     * The columns that teh like condition should be applied.
     */
    private array $columns;

    /*
     * Initialise the class.
     */
    public function __construct(...$columns)
    {
        $this->columns = $columns;
    }

    /**
     * Implement like condition on some columns.
     */
    public function __invoke(Builder $query, $value, string $property): void
    {
        foreach ($this->columns as $column) {
            $query->orWhere($column, 'LIKE', '%'.$value.'%');
        }
    }
}
