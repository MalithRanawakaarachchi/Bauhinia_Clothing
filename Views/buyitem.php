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
        $price = $_POST["price"];
        $image = $_POST["image"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy an Item</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="styles_for_BAUHINIA.css"/>

    <link rel="stylesheet" type="text/css" href="js/jquery-ui.min.css"/>

</head>
<body>
    <div style="height:0px;"></div>
    <div class="container-fluid">
        <div>
            <img src="../assets/logo.png" height="200px;">
        </div>
        <form action="completePurchase.php" method="POST">
            <div class="row">
                <div style="width:200px;"></div>
                <div>
                    <div style="width:580px;">               
                        <img src="uploads/<?php echo $image ?>">
                    </div>
                </div> 
                <div style="width:200px;"></div> 
                <div> 
                    <div>                       
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                    </div>
                    <div>
                        <p>Item Code</p>
                        <input type="text" name="itemCode" value="<?php echo $code ?>">
                    </div>
                    <div style="height:50px;"></div>
                    <div>
                        <p>Color</p>
                        <input type="text" name="color" value="<?php echo $color ?>">
                    </div>
                    <div style="height:50px;"></div>
                    <div>
                        <p>size</p>
                        <select name="categorysize" required class="bg-primary" style="border-color:#3778C2; color:white; outline-style:none; border-radius:5px;" id="Categorysize">

                        <option value=""><font color="#3778C2"> Select size before complete purchase </font></option>
                        <option value="XXS"><font color="#3778C2"> XXS </font></option>
                        <option value="XS"><font color="#3778C2"> XS </option>
                        <option value="S"><font color="#3778C2"> S </font></option>
                        <option value="M"><font color="#3778C2"> M </font></option>
                        <option value="L"><font color="#3778C2"> L </font></option>
                        <option value="XL"><font color="#3778C2"> XL </font></option>
                        <option value="XXL"><font color="#3778C2"> XXL </font></option>

                        </select>   
                    </div>
                    <div style="height:50px;"></div>
                    <div>
                        <p>Price</p>                       
                            <div class="row" style="margin:0px 0px 0px 1px;"><input type="text" style="height:30px; width:80px;" name="price" value="<?php echo $price ?>" ><input type="text" style="height:30px; width:100px; border:none;" name="" value="LKR" ></div>          
                    </div>
                    <div style="height:50px;"></div>
                    <div>
                        <p>Quantity</p>
                        <input type="text" name="qty" value="" style="width:50px;">
                    </div>
                </div>
                <div style="width:200px;"></div>
                <div>
                    <div style="height:480px;"></div>
                </div>
            </div> 
            <div style="height:50px;"></div>
            <div class="row">
                <div style="width:1280px;"></div>
                <div><button type="submit" class="btn btn-primary">Complete Purchase</button> <a href="" class="btn"><img src="../assets/cart.png" height="30px"></a></div>
            </div> 
        </form>
    </div>
</body>
</html>