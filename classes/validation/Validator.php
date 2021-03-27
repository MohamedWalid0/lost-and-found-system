<?php

namespace validation ; 

// use validation \Image;
// use validation \RequiredImage;

require_once 'ValidationInterface.php' ;
require_once 'Email.php' ;
require_once 'Required.php' ;
require_once 'Str.php' ;
require_once 'Max.php' ;
require_once 'Numeric.php' ;

require_once 'RequiredImage.php' ;  
require_once 'Image.php' ;


class Validator {

    public $errors = [] ;

    private function makeValidation(ValidationInterface $v) {
        return $v->validate() ;
    }

    public function rules( $name , $value , array $rules){

        foreach ($rules as $rule) {

            if($rule == 'required'){
                $error = $this->makeValidation(new Required($name , $value));
            }
            elseif($rule == 'string'){
                $error = $this->makeValidation(new Str($name , $value));
            }
            elseif($rule == 'numeric'){
                $error = $this->makeValidation(new Numeric($name , $value));
            }       
            elseif($rule == 'max'){
                $error = $this->makeValidation(new Max($name , $value));
            }      
            elseif($rule == 'email'){
                $error = $this->makeValidation(new Email($name , $value));
            }
            elseif($rule == 'required-img'){
                $error = $this->makeValidation(new RequiredImage($name , $value));
            }
            elseif($rule == 'image'){
                $error = $this->makeValidation(new Image($name , $value));
            }
            else{
                $error = '' ;
            }

            if ($error != ''){
                array_push($this->errors , $error) ;
            }
       
        }

    }



}
