<?php
require_once 'mySql.php' ;

class Item extends MySql{



    public function createLostItem($data , $user_id){

        $query = "INSERT INTO `lost_items` (item_name , `user_id` , `category_id` , `description` , `lost_place` ) 
        VALUES ('{$data['itemName']}', $user_id  , '{$data['category']}' ,
        '{$data['description']}' , '{$data['place']}' )" ; 
               
        $result = $this->connect()->query($query);
    
        if($result == true){
            return true ;
        }

        return false ;

    }


    public function createFoundItem($data , $user_id){

        $query = "INSERT INTO `found_items` (item_name , `user_id` , `category_id` , `description` , `found_place` , `img` , `created_at`) 
        VALUES ('{$data['itemName']}', $user_id  , '{$data['category']}' ,
        '{$data['description']}' , '{$data['place']}' , '{$data['img']}'  , CURRENT_TIME())" ; 
               
        $result = $this->connect()->query($query);
    


        if($result == true){

            return true ;
        
        }

        return false ;

    }



    public function matchData($id){


        $query = "SELECT * FROM lost_items JOIN found_items
                  WHERE lost_items.user_id = $id 
                  AND lost_items.category_id = found_items.category_id 
                  AND lost_items.lost_place = found_items.found_place
                  AND found_items.owner_id IS NULL
                  " ;


        $result = $this->connect()->query($query);



        $userData = [] ;
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($userData , $row) ;
            }
        }
        return $userData ;





    }



    public function getItem( $id ){

        $query = "SELECT * FROM found_items WHERE id = '$id'" ;

        $result = $this->connect()->query($query);
        $product = null ;
        
        if ($result->num_rows == 1 ){
            $product = $result->fetch_assoc() ;
        }
        return $product ;
    

    }


    public function getLostItem($id){

        $query = "SELECT * FROM lost_items WHERE `user_id` = '$id'" ;

        $result = $this->connect()->query($query);
        $product = null ;
        
        if ($result->num_rows == 1 ){
            $product = $result->fetch_assoc() ;
        }
        return $product ;

    }







}