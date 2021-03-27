<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/loginStyle.css?v=<?php echo time();?>">


    <title>Document</title>
</head>
<body>

    <div class="login-page">
        <div class="form">
            
            <form class="login-form" action="handlers/loginHandle.php" method="POST" enctype="">
                <input type="email" placeholder="email" name="email"/>
                <input type="password" placeholder="password" name="password"/>
                <p>Havn't account ??</p>
                <a href="lostForm.php" class="mx-4">Lost ?</a>
                <a href="foundForm.php" class="mx-4">Found ?</a>
                <button name="submit" class="mt-4">login  <i class="fas fa-sign-in-alt"></i> </button>
            </form>
           
            
        </div>
        <a href="index.php" class="text-center text-white" > <p> Go to Home Page  <i class="fas fa-home"></i> </p> </a>
    </div>
    

    <script src="js/all.min.js"></script>

</body>
</html>