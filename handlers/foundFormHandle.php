<?php

use helpers\Image;
use validation\Validator;

session_start();

require_once '../classes/Image.php' ;



require_once '../classes/validation/Validator.php' ;
require_once '../classes/User.php' ;
require_once '../classes/Item.php' ;


if (isset($_POST['submit'])){

    $fullName = htmlspecialchars(trim($_POST['fullName'] ));
    $phone = htmlspecialchars(trim($_POST['phone'] ));
    $email = htmlspecialchars(trim($_POST['email'] ));

    $password = htmlspecialchars(trim($_POST['password'] ));
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    $address = htmlspecialchars(trim($_POST['address'])) ;
    $img = $_FILES['img'] ;
   
    $itemName = htmlspecialchars(trim( $_POST['itemName'])) ;
    $description = htmlspecialchars(trim( $_POST['description'])) ;
    $category = htmlspecialchars(trim($_POST['category'] )) ;
    $place = htmlspecialchars(trim($_POST['place'])) ;
    $date = htmlspecialchars(trim( $_POST['date'] ));


    // -------------- Validation --------------




    $v = new Validator ;

    $v->rules('fullname' , $fullName , ['required' , 'string' , 'max']) ;
    $v->rules('phone' , $phone , ['required' , 'string' , 'max']) ;
    $v->rules('email' , $email , ['required' , 'email' , 'max']) ;
    $v->rules('password' , $hashed_password , ['required' , 'string' , 'max']) ;
    $v->rules('address' , $address , ['required' , 'string' , 'max']) ;
    $v->rules('img' , $img , ['required-img' , 'image']) ;
    $v->rules('itemName' , $itemName , ['required' , 'string' , 'max']) ;
    $v->rules('description' , $description , ['required' , 'string' ]) ;
    $v->rules('category' , $category , ['required' , 'string' , 'max']) ;
    $v->rules('place' , $place , ['required' , 'string' , 'max']) ;
    $v->rules('date' , $date , ['required' , 'string' , 'max']) ;


    $errors = $v->errors ;
    $_SESSION['errors'] = $errors ;


    // is data is valid 
    if ($errors == []){

        $image = new Image($img) ;


        $data = [
            'fullName' => $fullName ,
            'phone' => $phone ,
            'email' => $email ,
            'password' => $hashed_password ,
            'address' => $address ,
            'img' => $image->new_name ,
            'itemName' => $itemName ,
            'description' => $description ,
            'category' => $category ,
            'place' => $place ,
            'date' => $date ,
        ] ;




        // store user data in users table
        $user = new User ;
        $result_user = $user->create($data) ;
        
        if ($result_user === true) {

            // get user id 
            $user_data = $user->getUserId($data) ;

            $image->upload() ;
  
        
            // store user data in users table
            $item = new Item ;
            $result_item = $item->createFoundItem($data , $user_data['user_id']) ;

            if ($result_item === true) {
                $_SESSION['userId'] = $user_data['user_id'] ;
                $_SESSION['userName'] = $user_data['full_name'] ;
                header('location:../done.php') ;
            }

            else{

                echo "something wrong in store item data " ;
                header('location:../foundForm.php') ;
                
            }
            
        }

        else {
            echo "something wrong in store user data " ;
            header('location:../foundForm.php') ;

        }


       
      

      

    



        
    }
    else{

        header('location:../foundForm.php');
    }
    


}