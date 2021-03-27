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


    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

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




    <nav class=" navbar navbar-expand-sm nav-nonActive" id="navbar"> 
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
    
    <header >
        <section class="section-one">
            
            <div class="container  py-5 ">
                
                <div class="row align-items-center py-5 ">
    
                    <div class="col-md-6 ">
                        <div class="header-info">

                            <h1>Lost And Found</h1>
                            <p class="text-muted my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, maiores aspernatur? Delectus enim fugiat tenetur porro architecto? </p>
                            <div>
                                <a href="lostForm.php"><button class="header-btns"  >  Lost</button>  </a>
                               <a href="foundForm.php"> <button class="header-btns" >  Found </button > </a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6">
                        <img src="images/undraw_travel_together_re_kjf2.svg" height="400px" class="w-100 header-img" alt="">
                    </div>
    
                </div>
    
            </div>
    
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" >
            <defs>
                <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#051937" />
                  <stop offset="100%" style="stop-color: #12040d" />
                </linearGradient>
            </defs>
            <path fill="url(#grad1)" fill-opacity="1" d="M0,32L120,58.7C240,85,480,139,720,138.7C960,139,1200,85,1320,58.7L1440,32L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
        </svg>
    </header>
      

    <section class="container mb-5">
 
        <div class="text-center mb-5 ">

            <div class=" d-flex justify-content-center HTU">
                <h2 class="HTU-overlay">How To Use</h2>
                <h2 class="HTU-title pt-4">How To Use</h2>
            </div>

        </div>

        <div class="row">

            <div class="col-md-4">

                <div class="text-center step-one">

                    <div class="img-container my-4 ">

                        <img src="images/step-img1.jpg" class="w-100 rounded-circle imgstep" alt="">
                        <div class=" rounded-circle step-number">
                            01
                        </div>

                    </div>

                    <h5 class="my-3">Easy to use</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quisquam?</p>
                </div>

            </div>
         
            <div class="col-md-4">

                <div class="text-center step-two">

                    <div class="img-container my-4 ">

                        <img src="images/step-img2.jpg" class="w-100 rounded-circle imgstep" alt="">
                        <div class=" rounded-circle step-number">
                            02
                        </div>

                    </div>

                    <h5 class="my-3">Customer Satisfaction </h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quisquam?</p>
                </div>

            </div>
         
            <div class="col-md-4">

                <div class="text-center">

                    <div class="img-container my-4 ">

                        <img src="images/step-img3.jpg" class="w-100 rounded-circle imgstep" alt="">
                        <div class=" rounded-circle step-number">
                            03
                        </div>

                    </div>

                    <h5 class="my-3">Reducing Costs </h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, quisquam?</p>
                </div>

            </div>

        </div>

    </section>



    <section class="section-three my-5">

        <div class="section-three-overlay  d-flex align-items-center">
            <div class="text-center text-white">
                <h3 class="my-4 section-three-title" >Hello to our website</h3>
                <p > Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Dignissimos reprehenderit atque maxime adipisci optio sed similique ut cupiditate eligendi eos culpa neque odit necessitatibus. Ab voluptatum sed, rem praesentium vero excepturi accusantium eaque iste assumenda, vel inventore ex. Et, eaque.</p>
            </div>
        </div>

    </section>


    <section class="container mb-5">

        <div class="text-center my-5 ">

            <div class=" d-flex justify-content-center services">
                <h2 class="services-overlay">Services</h2>
                <h2 class="services-title pt-4">Services</h2>
            </div>

        </div>

        <div class="row my-4">

            <div class="col-sm-6 col-md-3 my-2 ">

                <div class="text-left section-four-card">
                    <img src="images/project-1.jpg" class="w-100 section-four-card-img" alt="">
                    <h4 class="px-4"> This is card</h4>
                    <p class="text-muted px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, voluptatibus.</p>
                    <button class="btn bg-transparent section-four-card-btn  m-4"> Go to somthing</button>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 my-2">

                <div class="text-left section-four-card">
                    <img src="images/project-7.jpg" class="w-100 section-four-card-img" alt="">
                    <h4 class="px-4"> This is card</h4>
                    <p class="text-muted px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, voluptatibus.</p>
                    <button class="btn bg-transparent section-four-card-btn  m-4"> Go to somthing</button>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 my-2">

                <div class="text-left section-four-card">
                    <img src="images/project-8.jpg" class="w-100 section-four-card-img" alt="">
                    <h4 class="px-4"> This is card</h4>
                    <p class="text-muted px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, voluptatibus.</p>
                    <button class="btn bg-transparent section-four-card-btn  m-4"> Go to somthing</button>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 my-2">

                <div class="text-left section-four-card">
                    <img src="images/brain.jpg" class="w-100 section-four-card-img" alt="">
                    <h4 class="px-4"> This is card</h4>
                    <p class="text-muted px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, voluptatibus.</p>
                    <button class="btn bg-transparent section-four-card-btn  m-4"> Go to somthing</button>
                </div>
            </div>

        </div>
    </section>


    <section class="section-five py-5 my-5">
        <div class="container">
            <div class="row py-5 my-5 align-items-center"> 
                <div class="col-12 col-md-6 align-self-center text-center text-md-left">
                    <h2 class="sectionFiveTitle py-3">About Us</h2>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent diam lacus, dapibus sed imperdiet consectetur.                    </p>
                
                    <div class="row py-5">
                        <div class="col-12 col-md-2 align-self-center">
                            <i class="fas fa-palette  iconFive" ></i>
                        </div>
                        <div class="col-12 col-md-9 align-self-center">
                            <h3 class="py-2">Lost</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-12 col-md-2 align-self-center">
                            <i class="fas fa-fire ml-1 iconFive"></i>
                        </div>
                        <div class="col-12 col-md-9 align-self-center">
                            <h3 class="py-2" >Found</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="secFive-img-contain">
                        <img src="images/undraw_Google_docs_re_evm3.svg" class="w-100" alt="">
                    </div>
                </div>





            </div>
        </div>

    </section>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
    <script src="js/all.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
    <script src="js/main.js" ></script>
</body>
</html>