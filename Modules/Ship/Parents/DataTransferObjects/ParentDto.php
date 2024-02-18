<?php

namespace Modules\Ship\Parents\DataTransferObjects;

use Spatie\LaravelData\Data;

abstract class ParentDto extends Data
{
    public function getPropertiesNames(): array
    {
        return array_keys($this->toArray());
    }
}
