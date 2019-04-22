<?php
namespace Login\email;
use PHPUnit\Framework\TestCase;

// Class For User Email

class UserEmail{

    private $email;
    //private $dbemail;

    public function __construct(string $email)
{
    if($this->validatingUserEmail($email))
{
    $this->email=$email;

}

}
    /*public function validatingUserEmail($email)
    {
        $dbemail = 'alina@gmail.com';

        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return true;
        }

        if($email!==$dbemail) {
                   
            throw new \InvalidArgumentException(" Please enter correct email.",156);
        }
        
        else
        {
            throw new \InvalidArgumentException(" invalid email.",156);
            

        }
      
}*/
public function validatingUserEmail(string $email)
{

    if(empty($email))
    {
        throw new \InvalidArgumentException("Email Field Cannot Be empty",156);
    }
       
    else
    {
    return true;
    }
}
public function getEmail(): string
{
    return $this->$email;
}
}
