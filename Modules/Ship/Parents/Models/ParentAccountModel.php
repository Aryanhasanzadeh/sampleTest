<?php

namespace Modules\Ship\Parents\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Ship\Traits\ModelHelpers;


abstract class ParentAccountModel extends Authenticatable
{
    use ModelHelpers,
        HasApiTokens,
        Notifiable,
        HasFactory;
}
