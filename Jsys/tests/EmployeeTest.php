<?php
namespace PayrollUnit\ValueObjects;
use PHPUnit\Framework\TestCase;
require_once 'PHPUnit/Autoload.php';
require 'PayrollUnit/ValueObjects/Employee.php';

class EmployeeTest extends \PHPUnit_FrameWork_TestCase{


    public function testcase_checking_employee_id_length()
    {
        $actual="1502602";
        $emp=new Employee();
        $this->asserttrue($emp->Setid($actual));
    }
    public function testcase_checking_employee_id_numeric()
    {
        $actual="1502602";
        $emp=new Employee();
        $this->asserttrue($emp->Setid($actual));
    }
    public function testcase_checking_contact_number()
    {
        $actual="192-1111-2222";
        $emp=new Employee();
        $this->asserttrue($emp->ValidateNumber($actual));

    }
    public function testcase_validating_email()
    {
        $actual="me.aliriaz007@gmail.com";
        $emp=new Employee();
        $this->asserttrue($emp->valid_email($actual));
    }
    public function testcase_validating_name_alphabets()
    {
        $actual="Al Riaz";
        $emp=new Employee();
        $this->asserttrue($emp->valid_name($actual));
    }
    public function testcase_validating_name_length()
    {
        $actual="Al Riaz";
        $emp=new Employee();
        $this->asserttrue($emp->valid_name($actual));
    }

}

?>