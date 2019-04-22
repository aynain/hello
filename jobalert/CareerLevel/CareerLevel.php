<?php 
namespace JobAlert\CareerLevel;
require 'JobAlert/CareerLevel/CareerlevelInterface.php';
// Class For User Career
class JobAlertCareerLevel implements CareerlevelInterface
{
    private $careerlevel;
    public function __construct(string $careerlevel)
    {
        if($this->SelectCareerLevelForJobAlert($careerlevel))
        {
            $this->careerlevel =$careerlevel;
        }
    }
   
    private function SelectCareerLevelForJobAlert(string $careerlevel)
    {
        if(empty($careerlevel))
        {
            throw new \InvalidArgumentException("Please select one career value.", 002);
        }
        return true;
    }
    public function getJobAlertCareerLevel(): string
    {
        return $this->careerlevel;
    }
}
?>