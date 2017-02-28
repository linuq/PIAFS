<?php

include_once './src/plugins/userInfo/include/form_element_db.php';

class FormElementDbTest extends PHPUnit_Framework_TestCase
{

    protected $form_element_db;

    protected function setUp()
    {
        $this->form_element_db = new form_element_db();
    }

    public function testTemplate()
    {

    }

}
?>
