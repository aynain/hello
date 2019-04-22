<?php 
namespace JobAlert\ExpectedSalary;
require 'JobAlert/ExpectedSalary/ExpectedSalaryInterface.php';

// Class To Select Expected Salary For Job Alerts 
class JobAlertExpectedSalary implements ExpectedSalaryInterface
{
    private $expectedSalary;

    public function __construct(string $expectedSalary)
    {
        if($this->SelectExpectedSalaryForJobAlert($expectedSalary))
        {
            $this->expectedSalary = $expectedSalary;
        }
    }

   
    private function SelectExpectedSalaryForJobAlert(string $expectedSalary)
    {
        if(empty($expectedSalary))
        {
            throw new \InvalidArgumentException("Please select expected salary value", 001);
        }
        return true;
    }
    public function getJobAlertExpectedSalary(): string
    {
        return $this->expectedSalary;
    }

}
?>
