<?php

namespace Modules\Message\App\Actions;

use Modules\Message\App\Dtos\CreateMessageDto;
use Modules\Message\App\Models\Message;
use Modules\Ship\Exceptions\CreateResourceFailedException;
use Modules\Ship\Parents\Actions\ParentAction;
use Exception;
class CreateMessageAction extends ParentAction
{
    /**
     * Handel Create Message record
     *
     * @throws CreateResourceFailedException
     */
    public function run(CreateMessageDto $dto)
    {
        try {
            return Message::create($dto->toArray());
        }catch (Exception){
            throw new CreateResourceFailedException();
        }
    }
}
