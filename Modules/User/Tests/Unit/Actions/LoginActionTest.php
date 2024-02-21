<?php

namespace Modules\User\Tests\Unit\Actions;

use Modules\Ship\Exceptions\NotFoundException;
use Modules\Ship\Parents\Tests\ParentTestCase;
use Modules\User\App\Actions\LoginAction;
use Modules\User\App\Dtos\LoginDto;
use Modules\User\App\Dtos\TokenDto;
use Modules\User\Models\User;

class LoginActionTest extends ParentTestCase
{
    public function test_login_action_work_correctly(): void
    {
        $user = User::factory()->set('phone', '09369301840')->createOne();

        $data = LoginDto::from(
            [
                'phone' => $user->phone,
                'password' => 'password'
            ]
        );

        $result =resolve(LoginAction::class)->run($data);

        $this->assertInstanceOf(TokenDto::class, $result);
        $this->assertNotNull($result->token);
    }

    public function test_login_action_work_correctly_and_not_logged_in_with_wrong_phoneNumber(): void
    {
        $this->expectException(NotFoundException::class);

        $user = User::factory()->set('phone', '09369301840')->createOne();

        $data = LoginDto::from(
            [
                'phone' => fake()->phoneNumber,
                'password' => 'password'
            ]
        );

        resolve(LoginAction::class)->run($data);
    }
}
