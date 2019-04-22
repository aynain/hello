<?php 
namespace JobAlert\City;
require 'JobAlert/City/CityInterface.php';

// Class to Select City for JobAlert
class JobAlertCity implements CityInterface
{
    private $city;

    public function __construct(string $city)
    {
        if($this->SelectCityForJobAlert($city))
        {
            $this->city = $city;
        }
    }

    private function SelectCityForJobAlert(string $city)
    {
        if(empty($city))
        {
            throw new \InvalidArgumentException("Please select one city.", 33);
        }
        return true;
    }
    public function getCity(): string
    {
        return $this->city;
    }
}
?>
