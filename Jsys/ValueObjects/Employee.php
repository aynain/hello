<?php

namespace PayrollUnit\ValueObjects;
use PHPUnit\Framework\TestCase;
class Employee{

 var  $employeeid="";
 var  $employeeName;
 var $employeeNumber;
 var  $employeeEmail;

  public function Setid($id)
  {
    $maxlength=10;
    if(strlen($id)>$maxlength||!is_numeric($id))
    {
       return false;
    }
    else
    {
      $this->employeeid=$id;
      return true;
    }

  }
  public function ValidateNumber($no)
  {


    if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $no))
    {
        return true;
    }
    else{
        return false;
    }



  }
  public function valid_email($str)
  {
      if(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str))
      {
          return true;
      }
      return  false;
  }
    public function valid_name($str)
    {
        if(preg_match("/^([a-zA-Z' ]+)$/",$str)&&strlen($str)<100)
        {
            return true;
        }
        return  false;
    }

}

?>
