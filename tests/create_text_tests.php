<?php

class CreateTextTest extends PHPUnit_Framework_TestCase
{
    function setUp() {
        @unlink('test.txt');
    }

    function tearDown() {
        @unlink('test.txt');
    }

    function testCreation() {
        $filename="test.txt";
        $handle=fopen($filename, "a+");
        fclose($handle);
        $this->assertTrue(file_exists('test.txt'), 'File created');
    }

    function testContent() {
        $filename="test.txt";
        $content="test";
        $handle=fopen($filename, "a+");
        fwrite($handle, stripslashes($content));
        fclose($handle);
        $this->assertEquals(file_get_contents('test.txt'), 'test');
    }
}
?>
