<?php

namespace Modules\User\App\Http\Controllers;


use Modules\Ship\Parents\Controllers\ParentApiController;

class LoginController extends ParentApiController
{
    public function __construct()
    {
    }

    public function __invoke()
    {
        return 'ok';
    }
}
