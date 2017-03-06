<?php

include_once(PHPWG_ROOT_PATH."plugins/userInfo/include/form_element_db.php");

class PostValidation
{

    static function areValid($toValidate){
        foreach($toValidate as $item){
            if(!(self::isValid($item))){
                return false;
            }
        }
        return true;
    }

    static function isValid($toValidate){
        if(!isset($toValidate)){
            return false;
        }
        if(empty($toValidate)){
            return false;
        }
        return true;
    }
}
