<?php

namespace validation ; 

require_once 'ValidationInterface.php' ;

class RequiredImage implements ValidationInterface {

    private $name ;
    private $value ; 

    public function __construct($name , $value) {

        $this->name = $name ;   
        $this->value = $value ;
    }

    public function validate()  {

        if (strlen($this->value['name']) == 0){
            return "This $this->name is Required" ;
        }
    }


    
}