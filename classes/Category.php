<?php
require_once 'mySql.php' ;

class Category extends MySql{

    public function getAll(){
        $query = "SELECT * FROM categories" ;
        $result = $this->connect()->query($query);
        
        $categories = [] ;

        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($categories , $row) ;
            }
        }
        return $categories ;
        
    }



    public function getName( $id ){

        $query = "SELECT * FROM categories WHERE id = '$id'" ;

        $result = $this->connect()->query($query);
        $category = null ;
        
        if ($result->num_rows == 1 ){
            $category = $result->fetch_assoc() ;
        }
        return $category ;
    

    }


}