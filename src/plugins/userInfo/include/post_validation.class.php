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

    static function areValidDates($toValidate){
        foreach($toValidate as $item){
            if(!(self::isValidDate($item))){
                return false;
            }
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

    static function optionsExist($items){
        $formElement = new form_element_db();
        foreach($items as $key => $value){
            $response = $formElement->getElementTypeByName($key);
            if(array_values($response)[0] == 'choice'){
                $formOptions = $formElement->getFormOptionsByName($key);
                if(!(self::optionExist($formOptions, $value))){
                    return false;
                }
            }
        }
        return true;
    }

    static function optionExist($formOptions, $value){
        if (strpos(array_values($formOptions)[0], $value) !== false) {
            return true;
        }
        return false;
    }
}
