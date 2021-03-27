<?php
require_once '../classes/User.php' ;


session_start() ;


$ownerId = $_GET['ownerId'] ;
$itemId = $_GET['itemId'] ;

$user = new User ;
$result = $user->setOwner($ownerId , $itemId) ;


if ($result == true) {
    header('location:../done.php') ;
    // echo "success" ;
}