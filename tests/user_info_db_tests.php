<?php

include_once './src/plugins/userInfo/user_info_page/user_info_db.php';

class UserInfoDbTest extends PHPUnit_Framework_TestCase
{

    protected $user_info_db;

    protected function setUp()
    {
        $this->user_info_db = new user_info_db();
    }

    public function testTemplate()
    {

    }

}
?>
