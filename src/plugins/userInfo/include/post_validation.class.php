<?php

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

    static function isValidDate($toValidate){
         	
        $pattern = '/^[0-9]{4}-(((0[13578]|(10|12))-(0[1-9]|[1-2][0-9]|3[0-1]))|(02-(0[1-9]|[1-2][0-9]))|((0[469]|11)-(0[1-9]|[1-2][0-9]|30)))/';
        preg_match($pattern, $toValidate, $matches, PREG_OFFSET_CAPTURE);
        if(empty($matches)){
            return false;
        }
        return true;
    }

}
