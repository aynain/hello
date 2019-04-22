<?php 
namespace JobAlert\KeywordCheckbox;
require 'JobAlert/KeywordCheckbox/KeywordCheckboxInterface.php';

// Class to Check Keyword for Job alert
class JobAlertKeywordCheckbox implements KeywordCheckboxInterface
{
    private $KeywordCheck;

    public function __construct(string $KeywordCheck)
    {
        if($this->CheckKeywordForJobAlert($KeywordCheck))
        {
            $this->KeywordCheck = $KeywordCheck;
        }
    }

    private function CheckKeywordForJobAlert(string $KeywordCheck)
    {
        if(empty($KeywordCheck))
        {
            throw new \InvalidArgumentException("Please check keyword for Job alert.", 40);
        }
        return true;
    }
    public function getKeywordCheck(): string
    {
        return $this->KeywordCheck;
    }
}
?>
