<?php
namespace Language\LanguageProficiency;


require 'Language/LanguageProficiency/LanguageProficiencyInterface.php';
// Class For User to add language proficiency
class LanguageProficiency implements LanguageProficiencyInterface
{
private $langproficiency;

function __construct(string $langproficiency)
{
    if($this->ValidatingUserLanguageProficiency($langproficiency))
    {
        $this->langproficiency=$langproficiency;
    }

}

public function ValidatingUserLanguageProficiency(string $langproficiency)
{

    if(empty($langproficiency)) {

        throw new \InvalidArgumentException("You Must Select Something",10);
    }

    return true;
    
}
public function getLanguageProficiency(): string
{
    return $this->$langproficiency;
}
}

?>