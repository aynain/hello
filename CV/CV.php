<?php 
namespace CV;
require 'CV/CVInterface.php';

// Class to Upload CV
class CVupload implements CVInterface
{
    private $CV;

    public function __construct(string $CV)
    {
        if($this->UploadCVforJob($CV))
        {
            $this->CV = $CV;
        }
    }
    private function UploadCVforJob(string $CV)
    {
        if (!preg_match('/^.*.(msword|doc|pdf|txt)$/i', $CV))
        {
            throw new \InvalidArgumentException("Please upload correct file.", 21);
        }
        else
        {
            return true;
        } 
    }
    public function getCV(): string
    {
        return $this->CV;
    }
}
?>
