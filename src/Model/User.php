<?php
declare(strict_types=1);

namespace App\Model;

class User
{
    public function changePassword(string $password)
    {
        return password_hash($password);
    }
}