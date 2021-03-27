<?php
require_once 'mySql.php' ;

class Place extends MySql{

    public function getAll(){
        $query = "SELECT * FROM places" ;
        $result = $this->connect()->query($query);
        
        $places = [] ;

        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($places , $row) ;
            }
        }
        return $places ;
        
    }





    public function getPlaceName( $id ){

        $query = "SELECT * FROM places WHERE id = '$id'" ;

        $result = $this->connect()->query($query);
        $place = null ;
        
        if ($result->num_rows == 1 ){
            $place = $result->fetch_assoc() ;
        }
        return $place ;
    

    }



    

}