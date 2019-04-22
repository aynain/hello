<?php
namespace Language\LanguageProficiency;
use PHPUnit\Framework\TestCase;
require 'Language/LanguageProficiency/LanguageProficiency.php';
class LanguageProficiencyTest extends TestCase
{
public function test_for_checking_user_language_proficiency_field_not_null()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionCode(10);
        $this->expectExceptionMessage("You Must Select Something");
        $lang= new LanguageProficiency("");
       
   }
}