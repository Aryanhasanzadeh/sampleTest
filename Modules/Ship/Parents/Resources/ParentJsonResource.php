<?php

namespace Modules\Ship\Parents\Resources;

use Illuminate\Http\Resources\Json\JsonResource as LaravelJsonResource;
use Modules\Ship\Traits\Resources\CustomizeResource;

abstract class ParentJsonResource extends LaravelJsonResource
{
    use CustomizeResource;
}
