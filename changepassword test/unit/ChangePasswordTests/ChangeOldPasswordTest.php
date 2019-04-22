<?php
namespace ChangePassword;
use PHPUnit\Framework\TestCase;
require 'ChangePassword/ChangePassword.php';


class Login extends TestCase
{


    public function test_of_password_must_contain_eight_characters()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionCode(4);
        $this->expectExceptionMessage("Password contain atleast Eight Characters");
        $password=new UserPassword('s');
    
    }
    

public function test_for_your_password_must_contain_atleast_one_lower_case()
{
    $this->expectException(\InvalidArgumentException::class);
    $this->expectExceptionCode(2);
    $this->expectExceptionMessage("Password contain Lower Case Letters");
    $password=new UserPassword('ASDASDASDASDAS');

}
public function test_for_your_password_must_contain_atleast_one_upper_case()
{  
    $this->expectException(\InvalidArgumentException::class);
    $this->expectExceptionCode(5);
    $this->expectExceptionMessage("Password contain Upper Case Letters");
    $password=new UserPassword('alinabhwsdfsfsfsd');

}

}