<?php

namespace Modules\User\App\Http\Resources;

use Illuminate\Http\Request;
use Modules\Ship\Parents\Resources\ParentJsonResource;
use Modules\User\Models\User;

/**
 * @mixin User
 */
class UserResource extends ParentJsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name
        ];
    }
}
