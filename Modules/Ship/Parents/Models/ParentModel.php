<?php

namespace Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as LaravelModel;
use Traits\ModelHelpers;


abstract class ParentModel extends LaravelModel
{
    use HasFactory,
        ModelHelpers;
}
