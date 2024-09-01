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
    <link rel="stylesheet" type="text/css" href="styles_for_library_system.css"/>

    <style>

        body{
            background-image:url("../Assets/untitled-4.png" );           
            background-attachment: fixed
        }

    </style>

</head>
<body>
    <div class="container" align="center">
        <div class="row"> 
            <div class="col-12">
                <!--<br><h1 class="text-center">LOWA STATE UNIVERSITY </h1>-->
                <br><img src="../Assets/logo home2.png" class="mx-auto d-block" style="width:310px;"> 
            </div>
        </div>

        <div class="row"> 
            <div class="col-12">
                <p class="text-center">online library management system</p>
            </div>
        </div>

        
        <div class="background-styles row col-xl-5 col-lg-6 col-md-7 col-sm-8 justify-content-center" style="border-radius:15px; box-shadow: 0px 0px 10px 0px #000;">              
                
            <div class="top-div-height col-12"></div>    
            <div class="col-12">
                <font face="Bahnschrift SemiCondensed" size=10 style="shadow: 0px 0px 10px 0px #000;">Welcome</font>
            </div>
            <div class="empty-div-height col-12"></div>
            <form class="col-12" action="authorized.php" method="post">
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
                    <input type="text" name="password" class="textbox text-center outline-border">
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
</body>
</html>