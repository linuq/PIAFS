<?php

include_once 'src/plugins/userInfo/include/post_validation.class.php';

class PostValidationTest extends PHPUnit_Framework_TestCase
{

    public function testIsValidReturnFalseIfVariableNotSet()
    {
        $variable = null;

        $actualResult = PostValidation::isValid($variable);

        $this->assertFalse($actualResult);
    }

    public function testIsValidReturnFalseIfVariableIsEmpty()
    {
        $variable = "";

        $actualResult = PostValidation::isValid($variable);

        $this->assertFalse($actualResult);
    }

    public function testIsValidReturnTrueIfVariableIsValid()
    {
        $variable = "Bob";

        $actualResult = PostValidation::isValid($variable);

        $this->assertTrue($actualResult);
    }

    public function testAreValidReturnFalseIfAVariableIsEmpty()
    {
        $variableArray = array("", "bob", "roger");

        $actualResult = PostValidation::areValid($variableArray);

        $this->assertFalse($actualResult);
    }

    public function testAreValidReturnTrueIfAllVariablesAreValid()
    {
        $variableArray = array("sylvain", "bob", "roger");

        $actualResult = PostValidation::areValid($variableArray);

        $this->assertTrue($actualResult);
    }

    public function testAreValidReturnFalseIfAVariableIsNotSet()
    {
        $variableArray = array(null, "bob", "roger");

        $actualResult = PostValidation::areValid($variableArray);

        $this->assertFalse($actualResult);
    }

    public function testAreValidReturnFalseIfMultipleVariablesAreNotSet()
    {
        $variableArray = array(null, "bob", null);

        $actualResult = PostValidation::areValid($variableArray);

        $this->assertFalse($actualResult);
    }

    public function testIsValidDateReturnTrueIfMatchesFormat(){
        $date = "2016-08-01";

        $actualResult = PostValidation::isValidDate($date);

        $this->assertTrue($actualResult);
    }


    public function testIsValidDateReturnFalseIfDayIsOverMaxValueForMonth(){
        $date = "2017-02-30";

        $actualResult = PostValidation::isValidDate($date);

        $this->assertFalse($actualResult);
    }

    public function testIsValidDateReturnFalseIfDayIsLessThan1(){
        $date = "2016-08-00";

        $actualResult = PostValidation::isValidDate($date);

        $this->assertFalse($actualResult);
    }

    public function testIsValidDateReturnFalseIfMonthIsOver12(){
        $date = "2016-13-01";

        $actualResult = PostValidation::isValidDate($date);

        $this->assertFalse($actualResult);
    }

    public function testIsValidDateReturnFalseIfMonthIsLessThan1(){
        $date = "2016-00-01";

        $actualResult = PostValidation::isValidDate($date);

        $this->assertFalse($actualResult);
    }

    public function testIsValidDateReturnFalseIfYearIsLessThan1(){
        $date = "0000-00-01";

        $actualResult = PostValidation::isValidDate($date);

        $this->assertFalse($actualResult);
    }

    public function testIsValidDateReturnFalseIfMissing0InFrontOfYear(){
        $date = "100-00-01";

        $actualResult = PostValidation::isValidDate($date);

        $this->assertFalse($actualResult);
    }

    public function testIsValidDateReturnFalseIfMissing0InFrontOfMonth(){
        $date = "2000-1-01";

        $actualResult = PostValidation::isValidDate($date);

        $this->assertFalse($actualResult);
    }


    public function testIsValidDateReturnFalseIfMissing0InFrontOfDay(){
        $date = "2000-01-1";

        $actualResult = PostValidation::isValidDate($date);

        $this->assertFalse($actualResult);
    }

}
?>
