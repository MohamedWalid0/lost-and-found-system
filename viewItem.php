<?php 


require_once './classes/Item.php' ;
require_once './classes/User.php' ;
require_once './classes/Category.php' ;
require_once './classes/Place.php' ;

session_start() ;



$id = $_GET['id'] ;
$user = new User ;
$data = new Item ;
$place = new Place ;

$category = new Category ;
$result = $data->getItem($id) ;

$category_id = $result['category_id'] ;
$found_place_id = $result['found_place'] ;


$category_name = $category->getName($category_id) ;

$found_place_name = $place->getPlaceName($found_place_id) ;


$userData = $user->getUserData($result['user_id']) ;

$lost_item = $data->getLostItem($_SESSION['userId']) ;


if  (! isset($_SESSION['userId'])  || 
     $lost_item['category_id'] !=  $result['category_id']   || 
     $lost_item['lost_place'] != $result['found_place'] ||
     $result['owner_id'] != NULL)
    {

    header('location:404.php') ;

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Cormorant:ital,wght@1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marvel&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">  


    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/foundsStyle.css?v=<?php echo time();?>">

</head>
<body>
    
    <section id="loading" class="d-flex justify-content-center align-items-center ">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
          </div> 
    </section> 





    <nav class=" navbar navbar-expand-sm nav-active mb-5 " id="navbar">

        <div class="container">
            <a class="navbar-brand nav-link-active nav-link-hover"  href="index.php">LOST & FOUND</a>

                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavId">

                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link nav-link-active nav-link-hover"  href="#">Welcome , <?php echo $_SESSION['userName'] ; ?> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-active nav-link-hover"  href="handlers/logoutHandle.php">logout</a>
                        </li>
                   
                    </ul>

                </div>
            </div>

    </nav> 




    <section class="py-5">
    
        <div class="container ">

            <div class="row my-5">


                <div class="jumbotron w-50">

                    <h1 class="display-4 font-weight-bold"> <?php echo $result['item_name'] ; ?></h1>
                    <p class="lead">Posted at : <?php echo $result['created_at'] ; ?></p>
                    <p class="lead">Category : <?php echo $category_name['name']; ?></p>
                    <p class="lead"> Found Place : <?php echo $found_place_name['name'] ; ?></p>
                    <p class="lead">Description : <?php echo $result['description'] ; ?></p>

                    <hr class="my-4">
                    <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
                    <a class="btn btn-success btn-lg text-white" onclick="showPopUp()" role="button">Connect</a>
                </div>

                <div class="jumbotron w-50">
                    <img  src="images/<?php echo $result['img'] ?>"  class="item-img" alt="">
                </div>

            </div>

        </div>
    
    
    </section>
        

    <div id="pop" class="container pop p-5" >
        <h2 class="font-weight-bold"> <?php echo  $userData['full_name'] ?></h2>
        <p class="text-muted"> Posted at : <?php echo  $userData['created_at'] ?> </span>  </p>
        <p class="text-muted">Email : <span class="font-weight-bold text-dark"> <?php echo  $userData['email'] ?> </span>  </p>
        <p class="text-muted">Address : <span class="font-weight-bold text-dark">  <?php echo  $userData['address'] ?> </span>  </p>
        <p class="text-muted">Phone Number : <span class="font-weight-bold text-dark">  <?php echo  $userData['phone'] ?> </span>  </p>
        <div id="exit" onclick="closePopUp()">
            <i class="fas fa-times-circle "></i>
        </div>
        <a href="handlers/setOwnerHandle.php?ownerId=<?php echo $_SESSION['userId'] ; ?>&itemId=<?php echo $result['id'] ; ?>">
            <button class="btn btn-primary my-3 "> DONE !
                <i class="fas fa-thumbs-up"></i>
            </button>
        </a>

    </div>
 


    <script src="js/all.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
    <script src="js/founds.js" ></script>

</body>
</html>


