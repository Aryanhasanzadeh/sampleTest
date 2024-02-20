<?php

namespace Modules\Message\App\Actions;

use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Message\App\Models\Message;
use Modules\Ship\Filters\OrWhereLikeFilter;
use Modules\Ship\Parents\Actions\ParentAction;
use Modules\Ship\Pillars\Builders\ModelBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilderRequest;

class GetAllMessageAction extends ParentAction
{
    public function run(QueryBuilderRequest $request): LengthAwarePaginator
    {
        return ModelBuilder::new(Message::query(), $request)
            ->allowedFilters($this->getFilters())
            ->allowedSorts($this->getSortList())
            ->defaultSort('-created_at')
            ->paginate();
    }

    /**
     * @return array<int, mixed>
     */
    private function getFilters(): array
    {
        return [
            AllowedFilter::exact('id'),
            AllowedFilter::custom('s', new OrWhereLikeFilter('title', 'description'))
        ];
    }

    /**
     * @return array<int, mixed>
     */
    private function getSortList(): array
    {
        return [

        ];
    }
}
