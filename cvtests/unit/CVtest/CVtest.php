<?php
namespace CV;
use PHPUnit\Framework\TestCase;
require 'CV/CV.php';
class UploadCVTest extends TestCase
{
    public function test_for_CV_is_in_valid_format()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionCode(21);
        $this->expectExceptionMessage('Please upload correct file.');
        $obj=new CVupload('kkkk.jpg');
    
    }
}
?>