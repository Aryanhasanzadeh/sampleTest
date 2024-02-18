<?php

namespace Modules\Ship\Traits\Resources;

use Illuminate\Support\Arr;

trait CustomizeResource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string|null
     */
    public static $wrap = 'data';

    /**
     * Resources that can be included if requested.
     *
     * @var array<string>
     */
    public array $availableIncludes = [];

    /**
     * Include resources without needing it to be called.
     *
     * @var array<string>
     */
    public array $defaultIncludes = [];

    /**
     * Create a new instance of the class.
     */
    public function __construct($resource, array|string $includes = [], ?array $defaultIncludes = null)
    {
        parent::__construct($resource);

        if (is_string($includes)) {
            $this->defaultIncludes[] = $includes;
        } else {
            array_push($this->defaultIncludes, ...$includes);
        }

        $this->defaultIncludes = $defaultIncludes ?? array_unique($this->defaultIncludes);
    }

    /**
     * Customize the pagination information for the resource.
     */
    public function paginationInformation($request, $paginated, $default): array
    {
        $paginationKeys = ['current_page', 'from', 'last_page,', 'links', 'path', 'per_page', 'to', 'total'];

        return [
            'meta' => [
                'pagination' => Arr::only($default['meta'], $paginationKeys),
            ],
        ];
    }
}
