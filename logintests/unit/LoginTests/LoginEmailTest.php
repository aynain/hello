<?php
namespace Login\email;
use PHPUnit\Framework\TestCase;
require 'Login/email/Email.php';
class Login extends TestCase
{

    public function test_for_checking_if_email_enter_is_not_null()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionCode(156);
        $this->expectExceptionMessage("Email Field Cannot Be empty");
        $email = new UserEmail('');
        
    }

}