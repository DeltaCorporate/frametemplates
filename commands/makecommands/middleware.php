<?php
/*
*@Author: Houmame LAZAR <houms937@gmail.com>
*@Class: AuthMiddleware
*@NameSpace: App\Middlewares
*/

namespace App\Middlewares;

use Core\Middleware;
use Core\Request;
use Core\Session;

class NAME extends Middleware
{

    public function run(Request $request, Session $session): bool
    {
        //TODO: code here the action

    }

    public function error()
    {
        //TODO: code here the error action
    }
}
