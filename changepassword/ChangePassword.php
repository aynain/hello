<?php
namespace ChangePassword;
use PHPUnit\Framework\TestCase;

// Class For Change Old Password
class UserPassword{

    private $password;
    private $oldpassword;

    public function __construct(string $password)
    {
       
        
            if($this->validatingUserPassword($password))
    {
        $this->password=$password;
    
    }   
    
    }

    private function validatingUserPassword($password)
    {

            if (strlen($password) <= 8) 
             {
                throw new \InvalidArgumentException("Password contain atleast Eight Characters",4);
    
            }

            else if(!preg_match('@[a-z]@', $password)) 
            
            {
                throw new \InvalidArgumentException("Password contain Lower Case Letters",2);

            }
    
            else if(!preg_match('@[A-Z]@', $password)) 
             
            {
                throw new \InvalidArgumentException("Password contain Upper Case Letters",5);
    
            }
            else
            {
                return true;
            }
    
    }
    public function getPassword(): string
   {
    return $this->$password;
   }
}