<?php

    require_once './classes/Item.php' ;
    session_start() ;

    if(! isset($_SESSION['userId']) ){
        header('location:404.php') ;
    }


    
    $results = new Item ;
    $data = $results->matchData($_SESSION['userId']) ;

    // var_dump($data) ;
    // die() ;


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


    <button class="btn" id="btnUp" onclick="scrollToTop()">
        <i class="fas fa-arrow-up text-white"></i>
    </button>

    <!-- <img id="arrow" src="images/cursor.svg" alt=""> -->




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




    <section class="my-5 py-5">
    
        <div class="container ">

            <div class="row my-5">

            <?php if( $data == [] ) {?>
                <p class="alert alert-primary w-100">
                    Sorry , haven't items match with your data .. will contact you soon
                </p>
            <?php } ?>
            
            <?php foreach ($data as $row) {?>

                <div class="col-s-12 col-md-6  p-3 ">
                    <div class="item d-flex p-3">

                        <div class="col-md-4">
                            <img  src="images/<?php echo $row['img'] ?>"  class="item-img" alt="">
                        </div>
                        <div class="col-md-8 ">
                            <h3> <?php echo $row['item_name'] ?> </h3>
                            <p class="text-muted"> <?php echo $row['description'] ?></p>
                            <a href="viewItem.php?id=<?php echo $row['id'] ?>"> <button class="item-btn px-3 py-1  offset-8" >More </button> </a>
                        </div>
                    
                    </div>

                </div>


            <?php } ?>



            </div>

        </div>
    
    
    </section>
        
 


    <script src="js/all.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
    <script src="js/founds.js" ></script>

</body>
</html>