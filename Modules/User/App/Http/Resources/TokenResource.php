<?php

namespace Modules\User\App\Http\Resources;

use Illuminate\Http\Request;
use Modules\Ship\Parents\Resources\ParentJsonResource;
use Modules\User\App\Dtos\TokenDto;

/**
 * @mixin TokenDto
 */
class TokenResource extends ParentJsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'token' => $this->token
        ];
    }
}
