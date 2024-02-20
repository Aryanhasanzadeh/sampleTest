<?php

namespace Modules\Ship\Traits\LiveWire;

use Spatie\QueryBuilder\QueryBuilderRequest;

trait FilterQueryHelper
{
    /** @var QueryBuilderRequest */
    protected $request;

    /** @var array<string,string> */
    public $filter = [];

    public function mount(): void
    {
        $this->filter = $this->request()->query('filter', $this->filter);
    }

    public function request(): QueryBuilderRequest
    {
        if (!$this->request) {
            $this->request = app(QueryBuilderRequest::class);
        }

        return $this->request;
    }

    public function filter(string $filter, ?string $slug): void
    {
        if (is_null($slug)) {
            unset($this->filter[$filter]);
        } else {
            $this->filter[$filter] = $slug;
        }

        $this->request()->query->set('filter', $this->filter);
    }
}
