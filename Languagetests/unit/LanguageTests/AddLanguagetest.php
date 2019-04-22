<?php
namespace language\AddLanguage;
use PHPUnit\Framework\TestCase;
require 'Language/AddLanguage/AddLanguage.php';
class AddLanguageTest extends TestCase
{
    public function test_for_adding_atleast_one_user_language()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionCode(42);
        $this->expectExceptionMessage("You Must Enter Atleast One Language");
        $lang= new AddLanguage("");
   
   }
  
}