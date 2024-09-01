<?php
    // session_start();
    // if(!(isset($_SESSION['isLogged']) && $_SESSION['isLogged']))
    // {
    //     header("Location:index.php");
    // }
    require_once('connection.php');
    if(!empty($_POST)){
        $output = '';
        $id = $_POST["id"];
        $code = $_POST["itemCode"];
        $color = $_POST["color"];
        $size = $_POST["categorysize"];
        $price = $_POST["price"];
        $qty = $_POST["qty"];

        $total = $price*$qty;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Purchase</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="styles_for_BAUHINIA.css"/>

    <link rel="stylesheet" type="text/css" href="js/jquery-ui.min.css"/>

    <style>
        .bg {
                background-image: url(../assets/showroom_buypage.jpg);    
                height: 100%; 
                background-position: relative;
                background-repeat: no-repeat;
                background-size: 100%;
            }

        tr{
            background-color: rgba(150,212,212,0.4);
        }
    </style>
</head>
<body class="bg">
    <div class="container-fluid">
    <div class="col-12" style="height:100px;"></div>
    <form action="completePurchaseBack.php" method="POST" style="color:white; background-color:rgba(0,0,0,0.7);">
        
        <input type="hidden" name="id" value="<?php echo $id ?>">
            <div class="row col-12">
                    <div class="col-2"></div>
                    <div class="col-10">
                        <div style="height:50px;"></div>
                        <div class="row col-12 " style="height:80px; text-align:left;">
                            <div class="col-5 "> <h4>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Verify Your Details</h4> </div>
                            <div class="col-2 " style="width:200px; "></div>
                            <div class="col-5 " > <h4>Item Description</h4> </div>
                        </div>
                        <div class="row col-12">
                            <div class="row col-1" style="">
                                <p>First Name : </p>
                            </div>
                            <div class=" row col-4">
                                <input type="text" name="fName" style="height:25px; width:300px; border-style:none none solid none;" id="">
                            </div>
                            <div class="row col-2" style="width:200px;"></div>
                            <div class="row col-5">
                                <p>Item Code : </p>
                                <input type="text" style="height:25px; border:none; background:transparent; color:white;" name="itemCode" value="<?php echo $code  ?>">
                            </div>
                        </div>

                        <div style="height:30px;"></div>

                        <div class="row col-12">
                            <div class="row col-1">
                                <p>Last Name : </p>
                            </div>
                            <div class="row col-4">
                                <input type="text" name="lName" style="height:25px; width:300px; border-style:none none solid none;" id="">
                            </div>
                            <div class="row col-2" style="width:200px;"></div>
                            <div class="row col-5">
                                <p>Colour : </p>
                                <input type="text" style="height:25px; border:none; background:transparent; color:white;" name="color" value="<?php echo $color  ?>">
                            </div>
                        </div>

                        <div style="height:30px;"></div>

                        <div class="row col-12">
                            <div class="row col-1">
                                <p>Emali : </p>
                            </div>
                            <div class="row col-4">
                                <input type="text" name="email" style="height:25px; width:300px; border-style:none none solid none;" id="">
                            </div>
                            <div class="row col-2" style="width:200px;"></div>
                            <div class="row col-5">
                                <p>Size : </p>
                                <input type="text" style="height:25px; border:none; background:transparent; color:white;" name="size" value="<?php echo $size  ?>">
                            </div>
                        </div>

                        <div style="height:30px;"></div>

                        <div class="row col-12">
                            <div class="row col-1">
                                <p>Address : </p>
                            </div>
                            <div class="row col-4">
                                <input type="text" style="height:25px; width:300px; border-style:none none solid none;" name="address" id="">
                            </div>
                            <div class="row col-2" style="width:200px;"></div>
                            <div class="row col-5">
                                <p>Item Price & Quantity : </p>
                                <input type="text" style="height:25px; border:none; width:50px; background:transparent; color:white;" name="price" value="<?php echo $price  ?>"><p>LKR</p> <p> &nbsp &nbsp X &nbsp &nbsp  </p> <input type="text" style="height:23px; width:60px; border:none; background:transparent; color:white;" name="qty" value="<?php echo $qty  ?>">
                            </div>
                        </div>
                        
                        <div style="height:30px;"></div>

                        <div class="row col-12">
                            <div class="row col-1">
                                <p>Mobile : </p>
                            </div>
                            <div class="row col-4">
                                <input type="text" name="mobile" style="height:25px; width:300px; border-style:none none solid none;" id="">
                            </div>
                            <div class="row col-2" style="width:200px;"></div>
                            <div class="row col-5">
                                <p style="color:aqua">Payment Method (Cash on delivery):</p>                                 
                            </div>
                        </div>

                        <div style="height:30px;"></div>

                        <div class="row col-12">
                            <div class="row col-1">
                                <p>Hotline : </p>
                            </div>
                            <div class="row col-4">
                                <input type="text" name="hotline" style="height:25px; width:300px; border-style:none none solid none;" id="">
                            </div>
                            <div class="row col-2" style="width:200px;"></div>
                            <div class="row col-5">
                                <div><label>Cash</label> &nbsp&nbsp <input type="radio" name="cash-card" value="cash"/> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <label>Card ( MASTER / VISA )</label> &nbsp&nbsp <input type="radio" name="cash-card" value="card"/>   </div>               
                            </div>
                        </div>

                        <div style="height:100px;"></div>

                        <div class="row center">
                            <div class="col-3"></div>
                            <div class="row col-5" style="height:30px;">
                                <p>Total Payment &nbsp &nbsp &nbsp </p>
                                <input type="text" name="total" value="<?php echo $total ?>&nbsp &nbsp LKR" style="color:white; text-align:center; width:210px; background:transparent; border:solid; border-color:white;">
                            </div>
                            <div class="col-4"></div>
                        </div>
                        <div style="height:80px;"></div>
                        <div class="row center">
                            <div class="col-4"></div>
                            <div class="col-4" style="height:30px;">
                                <button type="submit" class="btn btn-warning" name="buyNow" style="width:180px; border-color:black;">Buy Now</button>
                            </div>
                            <div class="col-4"></div>
                        </div>
                    </div>
                    <!-- <div class="col-1"></div> -->
            </div>
            
    </form>
    </div>
    
</body>
</html>