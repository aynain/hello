<?php
namespace language\AddLanguage;
require 'Language/AddLanguage/AddLanguageInterface.php';

// Class For User to add language
class AddLanguage implements AddLanguageInterface
{
    private $language=array();

    public function __construct(string $language)
    {
        if($this->ValidatingUserLanguages($language))
    {
        $this->Language=$language;
    
    }   
    
    }

    public function ValidatingUserLanguages($language)
    {

    if (!preg_match('/^[A-Za-z]+$/',$language)) 
      {
        
        throw new \InvalidArgumentException("You Must Enter Atleast One Language",42);
     }
     else{
       return true;
         }
        
    }
    public function getLanguage(): string
    {
     return $this->$language;
    }
}

          