<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="styles_for_BAUHINIA.css"/>

    <style>

        body{   
                background-image: url(../Assets/Clothing-Backgrounds.jpg);            
                height: 100%; 
                background-position: relative;
                background-repeat: no-repeat;
                background-size: 100%;
        }

    </style>

</head>
<body>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <div class="col-2" style="padding:10px;" align="left">      
        <img src="../assets/logo.png" width=250px;>
    </div>

    <div class="container" align="center">
        
        <div class=" row col-xl-5 col-lg-6 col-md-7 col-sm-8 justify-content-center" style="background-image:../assets/logo.png border-radius:15px; box-shadow: 0px 0px 10px 0px #000;">              
                
            <div class="top-div-height col-12"></div>    
            <div class="col-12">
                <font face="Bahnschrift SemiCondensed" size=10 style="shadow: 0px 0px 10px 0px #000;">Welcome to BAUHINIA</font>
            </div>
            <div class="empty-div-height col-12"></div>
            <form class="col-12" action="authorized.php" method="post">
                <?php if(!empty($msg)){echo $msg;} ?>
                <div class="">
                    <font face="Calibri" size=3 color="#818081"> Email or username </font>
                </div>
                <div class="col-12">   
                    <input type="text" name="email" class="textbox text-center outline-border">
                </div>                  
                <div class="empty-div-height col-12"></div>
                <div align="top">
                    <font face="Calibri" size=3 color="#818081"> Password </font>
                </div>
                <div class="col-12">
                    <input type="password" name="password" class="textbox text-center outline-border">
                </div>
                <div class="empty-div-height col-12"></div>
                <div class="col-12" style="height:30px;"></div>
                <div class="button-height col-12"> 
                    <button type="submit" name="login" class="button-size btn btn-primary btn-sm">Sign In</button>
                </div>
            </form>     
            <div class="justify-content-center" align="center">
                <a href="newAccount.php"><font size=3.5 color=#008dfc> create an account </font> </a> 
            </div>
            <div class="empty-div-height col-12"></div>
            <div class="col-12" style="height:10px;"></div>

        </div>       
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>