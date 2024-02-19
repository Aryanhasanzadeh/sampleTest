<?php

namespace Modules\User\App\Dtos;

use Modules\Ship\Parents\DataTransferObjects\ParentDto;

class LoginDto extends ParentDto
{
    public function __construct(
        public string $phone,
        public string $password,
    )
    {
    }
}
