<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\User;

class UsersController extends AppController
{
    public function password()
    {
        $user = new User;
        $user->setPassword("123456");
    }
}