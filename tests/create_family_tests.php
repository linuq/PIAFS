<?php

include_once '../src/createFamily.sh';

class create_family_tests extends PHPUnit_Framework_TestCase
{

    public function test_create_a_new_family()
    {
	$createFamily=shell_exec('../src/createFamily.sh var4');
	$doFileExist=file_exists('../src/var4');

	$this->assertTrue($doFileExist);
    }

    public function test_attempt_to_create_family_that_already_exists()
    {
	$output=shell_exec('../src/createFamily.sh var4');
	$expected="La famille var4 existe déjà\n";

	$this->assertEquals($expected,$output);
    }

}
?>
