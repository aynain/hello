<?php
namespace JobAlert\Experience;
require 'JobAlert/Experience/ExperienceInterface.php';

// Class For Add Experience to Create JobAlerts
class JobAlertExperience implements ExperienceInterface
{

    private $Addexperience;

    public function __construct(string $Addexperience)
    {
        if($this->selectExperienceForJobAlert($Addexperience))
        {
            $this->Addexperience = $Addexperience;
        }
    }

   

    private function selectExperienceForJobAlert(string $Addexperience)
    {
        if(empty($Addexperience))
        {
            throw new \InvalidArgumentException("Please select one experience.", 50);
        }
        return true;
    }
    public function getJobAlertExperience(): string
    {
        return $this->Addexperience;
    }

}