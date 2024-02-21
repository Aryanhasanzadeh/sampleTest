<?php

namespace Modules\User\Tests\Unit\Tasks;

use Modules\Ship\Parents\Tests\ParentTestCase;
use Modules\User\App\Dtos\TokenDto;
use Modules\User\App\Tasks\GetAccountAccessTokenTask;
use Modules\User\Models\User;

class GetAccountAccessTokenTaskTest extends ParentTestCase
{
    public function test_GetAccountAccessTokenTask_work_correctly()
    {
        $user = User::factory()->createOne();

        $result = resolve(GetAccountAccessTokenTask::class)->run($user);

        $this->assertInstanceOf(TokenDto::class, $result);
        $this->assertNotNull($result->token);
    }
}
