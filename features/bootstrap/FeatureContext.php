<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

require_once("src/plugins/userInfo/include/post_validation.class.php");
require_once './vendor/autoload.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{

    private $fieldToValidate;
    private $fieldsToValidate;
    private $dateToValidate;
    private $datesToValidate;

    public function __construct(array $parameters)
    {
        $this->fieldToValidate = "";
        $this->fieldsToValidate = [];

        $this->dateToValidate = "";
        $this->datesToValidate = [];
    }

    /**
     * @Given /^I have an empty field$/
     */
    public function iHaveAnEmptyField()
    {
        $this->fieldToValidate = "";
    }

    /**
     * @Given /^I have a field that is not set$/
     */
    public function iHaveAFieldThatIsNotSet()
    {
        $this->fieldToValidate = null;
    }

    /**
     * @Given /^I have a field that is correct$/
     */
    public function iHaveAFieldThatIsCorrect()
    {
        $this->fieldToValidate = "Hello world";
    }

    /**
     * @Given /^I have a valid date$/
     */
    public function iHaveAValidDate()
    {
        $this->dateToValidate = "1996-08-20";
    }

    /**
     * @Given /^I have a really early date$/
     */
    public function iHaveAReallyEarlyDate()
    {
        $this->dateToValidate = "990-08-20";
    }

    /**
     * @Given /^I have an impossible date$/
     */
    public function iHaveAnImpossibleDate()
    {
        $this->dateToValidate = "1990-02-31";
    }

    /**
     * @Given /^I have a date with an invalid format$/
     */
    public function iHaveADateWithAnInvalidFormat()
    {
        $this->dateToValidate = "20-08-1996";
    }

    /**
     * @Given /^I have multiple valid fields$/
     */
    public function iHaveMultipleValidFields()
    {
        $this->fieldsToValidate = ["foo", "bar"];
    }

    /**
     * @Given /^I have multiple valid dates$/
     */
    public function iHaveMultipleValidDates()
    {
        $this->datesToValidate = ["1996-02-02", "2016-02-02"];
    }

    /**
     * @When /^I run validation I should get false$/
     */
    public function iRunValidationIShouldGetFalse()
    {
        $actualValue = PostValidation::isValid($this->fieldToValidate);
        PHPUnit_Framework_Assert::assertFalse($actualValue);
    }

    /**
     * @When /^I run validation I should get true$/
     */
    public function iRunValidationIShouldGetTrue()
    {
        $actualValue = PostValidation::isValid($this->fieldToValidate);
        PHPUnit_Framework_Assert::assertTrue($actualValue);
    }

    /**
     * @When /^I validate all I should get true$/
     */
    public function iValidateAllIShouldGetTrue()
    {
        $actualValue = PostValidation::areValid($this->fieldsToValidate);
        PHPUnit_Framework_Assert::assertTrue($actualValue);
    }

    /**
     * @When /^I validate all I should get false$/
     */
    public function iValidateAllIShouldGetFalse()
    {
        $actualValue = PostValidation::areValid($this->fieldsToValidate);
        PHPUnit_Framework_Assert::assertFalse($actualValue);
    }

    /**
     * @Given /^one null$/
     */
    public function oneNull()
    {
        array_push($this->fieldsToValidate, null);
    }

    /**
     * @Given /^one invalid$/
     */
    public function oneInvalid()
    {
        array_push($this->fieldsToValidate, "");
    }


    /**
     * @Given /^one null date$/
     */
    public function oneNullDate()
    {
        array_push($this->datesToValidate, null);
    }

    /**
     * @Given /^one invalid date$/
     */
    public function oneInvalidDate()
    {
        array_push($this->datesToValidate, "");
    }


    /**
     * @When /^I validate date I should get true$/
     */
    public function iValidateDateIShouldGetTrue()
    {
        $actualValue = PostValidation::isValidDate($this->dateToValidate);
        PHPUnit_Framework_Assert::assertTrue($actualValue);
    }

    /**
     * @When /^I validate date I should get false$/
     */
    public function iValidateDateIShouldGetFalse()
    {
        $actualValue = PostValidation::isValidDate($this->dateToValidate);
        PHPUnit_Framework_Assert::assertFalse($actualValue);
    }

    /**
     * @When /^I validate all dates I should get true$/
     */
    public function iValidateAllDatesIShouldGetTrue()
    {
        $actualValue = PostValidation::areValidDates($this->datesToValidate);
        PHPUnit_Framework_Assert::assertTrue($actualValue);
    }

    /**
     * @When /^I validate all dates I should get false$/
     */
    public function iValidateAllDatesIShouldGetFalse()
    {
        $actualValue = PostValidation::areValidDates($this->datesToValidate);
        PHPUnit_Framework_Assert::assertFalse($actualValue);
    }

    
}
