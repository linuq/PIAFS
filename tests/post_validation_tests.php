<?php

include_once './src/plugins/userInfo/include/post_validation.class.php';

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

}
?>
