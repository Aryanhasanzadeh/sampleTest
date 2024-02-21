<?php

namespace Modules\User\Tests\Unit\Tasks;

use Modules\Ship\Exceptions\NotFoundException;
use Modules\Ship\Parents\Tests\ParentTestCase;
use Modules\User\App\Dtos\LoginDto;
use Modules\User\App\Tasks\FindUserByPhoneTask;
use Modules\User\Models\User;

class FindUserByPhoneTaskTest extends ParentTestCase
{
    public function test_find_user_by_phone_task_work_correctly()
    {
        $user = User::factory()->set('phone', '09369301840')->createOne();

        $data = LoginDto::from(
            [
                'phone' => $user->phone,
                'password' => 'password'
            ]
        );

        $result = resolve(FindUserByPhoneTask::class)->run($data);

        $this->assertInstanceOf(User::class , $result);
        $this->assertSame($user->id, $result->id);
    }

    public function test_find_user_by_phone_task_work_correctly_and_throw_exception_when_user_notfound()
    {
        $this->expectException(NotFoundException::class);

        $user = User::factory()->createOne();

        $data = LoginDto::from(
            [
                'phone' => fake()->phoneNumber,
                'password' => 'password'
            ]
        );

        resolve(FindUserByPhoneTask::class)->run($data);
    }
}
