<?php
namespace Login\password;

// Class For User Password
class UserPassword{

    private $password;

    public function __construct(string $password)
    {
       
        
            if($this->validatingUserPassword($password))
    {
        $this->password=$password;
    
    }   
    
    }

    public function validatingUserPassword(string $password)
    {

        if(empty($password))
        {
            throw new \InvalidArgumentException("Password Field Cannot Be empty",169);
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