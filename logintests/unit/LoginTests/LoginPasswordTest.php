<?php
namespace Login\password;
use PHPUnit\Framework\TestCase;
require 'Login\password\Password.php';


class Login extends TestCase
{

public function test_for_checking_if_password_enter_is_not_null()
{
    $this->expectException(\InvalidArgumentException::class);
    $this->expectExceptionCode(169);
    $this->expectExceptionMessage("Password Field Cannot Be empty");
    $password = new UserPassword('');
    
}
}