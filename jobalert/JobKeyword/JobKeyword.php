<?php 
namespace JobAlert\JobKeyword;
require 'JobAlert/JobKeyword/JobKeywordInterface.php';

// Class to add Keyword for Job alert
class JobAlertKeyword implements jobKeywordInterface
{
    private $Keyword;

    public function __construct(string $Keyword)
    {
        if($this->CheckKeywordForJobAlert($Keyword))
        {
            $this->Keyword = $Keyword;
        }
    }

    private function CheckKeywordForJobAlert(string $Keyword)
    {
        if(empty($Keyword))
        {
            throw new \InvalidArgumentException("Please enter Atleast one keyword for Job alert.", 20);
        }
       else if (strlen($Keyword) > 20) 
        {
           throw new \InvalidArgumentException("Keyword must be under twenty Characters.",24);

       }
        return true;
    }
    public function getJobKeyword(): string
    {
        return $this->Keyword;
    }
}
?>
