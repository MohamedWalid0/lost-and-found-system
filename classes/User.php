<?php
require_once 'MySql.php' ;

class User extends MySql{


    public function create($data){

        $query = "INSERT INTO `users` (full_name , `email` , `password` , `phone` , `address` ,`created_at`) 
        VALUES ('{$data['fullName']}','{$data['email']}' , '{$data['password']}' ,
        '{$data['phone']}' , '{$data['address']}' , CURRENT_TIME())" ; 
               
        $result = $this->connect()->query($query);
        
        if($result == true){
            return true ;
        }
        return false ;

    }
    // get user id
    public function getUserId($data){
        $query = "SELECT * FROM `users` WHERE email = '{$data['email']}' " ;
        $result = $this->connect()->query($query);
        $user = null ;
        if ($result->num_rows == 1 ){
            $user = $result->fetch_assoc() ;
        }
        return $user ;
    }
    
    public function login($email , $password){
        
       
        $hashed_password = sha1($password);
        
        $query = "SELECT * FROM users 
        WHERE email = '$email' AND `password` = '$hashed_password' " ;

        $result = $this->connect()->query($query) ;
        $user = null ;

     

        if ($result->num_rows == 1){
            $user = $result->fetch_assoc() ;
        }

        return $user ;


    }

    public function getUserData($id){

        $query = "SELECT * FROM users WHERE user_id = '$id'" ;

        $result = $this->connect()->query($query);
        $user = null ;
        
        if ($result->num_rows == 1 ){
            $user = $result->fetch_assoc() ;
        }
        return $user ;

    }


    public function setOwner($ownerId ,$itemId) {

        $query = "UPDATE `found_items` SET `owner_id` = '$ownerId' WHERE id = '$itemId' "; 
               
        $result = $this->connect()->query($query);
    
        if($result == true){
            return true ;
        }

        return false ;


    }



}


