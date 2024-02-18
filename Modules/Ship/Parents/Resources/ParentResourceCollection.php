<?php

namespace Modules\Ship\Parents\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection as LaravelResourceCollection;
use Modules\Ship\Traits\Resources\CustomizeResource;

abstract class ParentResourceCollection extends LaravelResourceCollection
{
    use CustomizeResource;
}
