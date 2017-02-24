<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

require_once("src/plugins/userInfo/include/post_validation.class.php");
require_once('PHPUnit/Autoload.php');
require_once('PHPUnit/Framework/Assert/Functions.php');
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{

    private $fieldToValidate;

    public function __construct(array $parameters)
    {
        $this->fieldToValidate = "";
    }

    /**
     * @Given /^I have an empty field$/
     */
    public function iHaveAnEmptyField()
    {
        $this->fieldToValidate = "";
    }

    /**
     * @When /^I run validation I should get false$/
     */
    public function iRunValidationIShouldGetFalse()
    {
        $actualValue = PostValidation::isValid($this->fieldToValidate);
        PHPUnit_Framework_Assert::assertFalse($actualValue);
    }
    
}
