<?php

namespace Modules\Message\App\Dtos;

use Modules\Ship\Parents\DataTransferObjects\ParentDto;

class CreateMessageDto extends ParentDto
{
    public function __construct(
        public string $title,
        public string $description,
    )
    {
    }
}
