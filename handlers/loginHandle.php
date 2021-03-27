<?php

require_once '../classes/User.php' ;

session_start() ;

if (isset($_POST['submit'])){
    
    
    $email = htmlspecialchars(trim($_POST['email'] ));
    $password = htmlspecialchars(trim($_POST['password'] ));
    
  
    
    
    $user = new User ;
 

    $result = $user->login( $email , $password ) ; 

    if ($result !== null) {

        $_SESSION['userId'] = $result['user_id'] ;
        $_SESSION['userName'] = $result['full_name'] ;        
        header('location:../founds.php') ;

    }
    else{
        header('location:../login.php') ;
    }

}





