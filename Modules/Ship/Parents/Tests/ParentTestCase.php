<?php

namespace Modules\Ship\Parents\Tests;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Modules\Ship\Traits\Tests\CreatesApplication;

abstract class ParentTestCase extends BaseTestCase
{
    use CreatesApplication,
        RefreshDatabase;


}
