<?php

require './vendor/autoload.php';
include_once 'src/plugins/skeleton_deprecated/calculator.class.php';


class SkeletonTest extends PHPUnit_Framework_TestCase
{
   public function testAssertTrueIsTrue()
   {
       $this->assertEquals(true, true);
   }

   public function testCalculatorAddCanAddNumbers(){
     $calculator = new Calculator();
     $result = $calculator->add(1, 1);
     $this->assertEquals($result, 2);
   }

   public function testCalculatorCanIncrement(){
     $calculator = new Calculator();
     $result = $calculator->increment(1);
     $this->assertEquals($result, 2);
   }
}
?>
