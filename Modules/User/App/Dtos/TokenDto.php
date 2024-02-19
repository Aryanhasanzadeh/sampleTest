<?php

namespace Modules\User\App\Dtos;

use Modules\Ship\Parents\DataTransferObjects\ParentDto;

class TokenDto extends ParentDto
{
    public function __construct(
        public string $token
    )
    {
    }
}
