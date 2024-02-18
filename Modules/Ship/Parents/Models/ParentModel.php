<?php

namespace Modules\Ship\Parents\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as LaravelModel;
use Modules\Ship\Traits\ModelHelpers;


abstract class ParentModel extends LaravelModel
{
    use HasFactory,
        ModelHelpers;
}
