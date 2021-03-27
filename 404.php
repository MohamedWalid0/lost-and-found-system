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
    <link rel="stylesheet" href="css/style.css">

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

    <img id="arrow" src="images/cursor.svg" alt="">




    <nav class=" navbar navbar-expand-sm nav-active" id="navbar"> 
        <div class="container">
            <a class="navbar-brand nav-link-active nav-link-hover"  href="index.php">LOST & FOUND</a>

                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavId">

                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link nav-link-active nav-link-hover"  href="lostForm.php">Lost</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-active nav-link-hover"  href="foundForm.php">Found</a>
                        </li>
                   
                        <li class="nav-item">
                            <a class="nav-link nav-link-active nav-link-hover"  href="login.php">Login</a>
                        </li>

                    </ul>

                </div>
            </div>
    </nav> 
    


    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <img src="images/undraw_page_not_found_su7k.svg" class="w-100 " height="500px" alt="">
    </div>



<script src="js/all.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
    <script src="js/main.js" ></script>
</body>
</html>