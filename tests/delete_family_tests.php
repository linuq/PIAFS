<?php

include_once './src/createFamily.sh';
include_once './src/deleteFamily.sh';

class delete_family_tests extends PHPUnit_Framework_TestCase
{

    public function test_delete_a_new_family()
    {
	$createFamily=shell_exec('./src/createFamily.sh var4');
	$deleteFamily=shell_exec('./src/deleteFamily.sh var4');

	$doFileExist=file_exists('./src/var4');

	$this->assertFalse($doFileExist);
    }

    public function test_attempt_to_delete_family_that_does_not_exists()
    {
	$output=shell_exec('./src/deleteFamily.sh fakeFolderName');
	$expected="\nLa famille fakeFolderName n'existe pas.\n";

	$this->assertEquals($expected,$output);
    }

}
?>
