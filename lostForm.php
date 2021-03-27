<?php

require_once './classes/Category.php' ;
require_once './classes/Place.php' ;

session_start() ;

$categories = new Category ;
$categories_results = $categories->getAll() ;

$places = new Place ;
$places_results = $places->getAll() ;


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


    <link rel="stylesheet" href="css/lostFormStyle.css?v=<?php echo time();?>">

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




 
    <section class="home">


        <div class="left-section">
            
            <div class="left-part d-flex justify-content-center align-items-center">
                <ul>
                    <?php if(isset($_SESSION['errors'])){ ?>
                        <?php foreach ($_SESSION['errors'] as $error) {?>
                            <li class="text-danger py-2"><?php echo $error?></li>
                        <?php } ?>
                    <?php } ?>

                </ul>
            </div>

        </div>
        <div class="right-section">

            <div class="right-part">
                
                <div class="left-form p-3">

                   
                    <div>
                        <p class="infoTitle">
                            Lost Form
                        </p>
                    </div>

                    <div>
                        <form action="handlers/lostFormHandle.php" method="POST">


                        
                            <div class="form-item">
                                <label id="nameLable" class="LableNonActive" >Full Name</label>
                                <input type="text" placeholder="Full Name" name="fullName"  id="nameInput" class="textNonActive">
                            </div>  
                                
                            <div class="form-item">
                                <label id="phoneLable" class="LableNonActive px-3" >Phone</label>
                                <input type="text" placeholder="Phone" name="phone"  id="phoneInput" class="textNonActive">
                            </div>  
                            
                            <div class="form-item">
                                <label id="emailLable" class="LableNonActive px-3" >Email</label>
                                <input type="text" placeholder="Email" name="email"  id="emailInput" class="textNonActive">
                            </div>  
                            
                            <div class="form-item">
                                <label id="passwordLable" class="LableNonActive" >Password</label>
                                <input type="password" placeholder="Password" name="password" id="passwordInput" class="textNonActive">
                            </div>  
                            
                            <div class="form-item">
                                <label id="addressLable" class="LableNonActive px-2" >Address</label>
                                <input type="text" placeholder="No. St Region" name="address"  id="addressInput" class="textNonActive">
                            </div>  
                            
                    </div>
                    
                </div>
                
                <div class="right-form p-3">
                    
               

                        <div>
                            <div class="form-item">
                                <label id="userNameLable" class="LableNonActive" >Item Name</label>
                                <input type="text" placeholder="Item Name" name="itemName" id="userNameInput" class="textNonActive">
                            </div> 

                            <div class="form-item">
                                <label id="categoryLable" class="LableNonActive px-2" >Category</label>
                                <!-- <input type="text" placeholder="Full Name"  id="nameInput" class="textNonActive"> -->
                            
                                <select name="category" id="categoryInput">

                                <option value="" hidden> Category </option>

                                    <?php foreach($categories_results as $row){ ?>

                                        <option value="<?php echo $row['id'] ;?>"> <?php echo $row['name'] ; ?> </option>

                                    <?php }?>

                                </select>
                            </div>  

                            <div class="form-item">
                                <label id="descriptionLable" class="LableAreaNonActive" >Description</label>
                                <!-- <input type="text" placeholder="Full Name"  id="nameInput" class="textNonActive"> -->
                                <textarea  id="descriptionInput"  name="description" class="textareaNonActive pt-3" placeholder="Discription"></textarea>
                            </div>  


                            <div class="form-item">
                                <label id="placeLable" class="LableNonActive px-4" >Place</label>
                                <select name="place" id="placeInput">
                                    <option value="" hidden> Found Place </option>
                                    <?php foreach($places_results as $row){ ?>

                                        <option value="<?php echo $row['id'] ;?>"> <?php echo $row['name'] ; ?> </option>

                                    <?php }?>

                                </select>
                            </div>  



                            <div class="form-item">
                                <label id="dateLable" class="LableNonActive px-4" >Date</label>
                                <input type="date" placeholder="Full Name" name="date"  id="dateInput" class="textNonActive">
                            </div>  

                            
                            <div class="btn-container">
                                <button name="submit" id="submitBtn" type="submit"  > Submit </button>
                            </div>
                            
                        </div>
                    </form>

                </div>
                    

            </div>

        </div>

    </section>






    <script src="js/all.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
    <script src="js/lostForm.js" ></script>
</body>
</html>