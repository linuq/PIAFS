<?php
require_once 'PHPUnit/Autoload.php';
require_once 'admin.php';

class SkeletonTest extends PHPUnit_Framework_TestCase
{
    public function testAssertTrueIsTrue()
    {
        $this->assertEquals(true, true);
    }

    public function testThatShouldFail(){
        $this->assertEquals(true, false);
    }
}
?>
