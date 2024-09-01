<?php
    require_once('connection.php');

    if(!empty($_POST)){
        $output = '';
        $id = $_POST["id"];
        $fName = $_POST["fName"];
        $lName = $_POST["lName"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $mobile = $_POST["mobile"];
        $hotline = $_POST["hotline"];
        $itemCode = $_POST["itemCode"];
        $color = $_POST["color"];
        $size = $_POST["size"];
        $price = $_POST["price"];
        $qty = $_POST["qty"];
        $payment = $_POST["cash-card"];
        $date = date("Y/m/d");

        //Image Uploading Code
        if(isset($_POST['buyNow'])){     
          
            $insert_query = "INSERT INTO tblorders(date,firstName,lastName,email,address,mobile,hotline,itemCode,color,size,price,qty,paymentMethod) VALUES('$date','$fName','$lName','$email','$address','$mobile','$hotline','$itemCode','$color','$size','$price','$qty','$payment')";
            $execute_query = mysqli_query($connection,$insert_query);

            $insert_query2 = "UPDATE tblitems SET qty = qty-'$qty' WHERE id='$id'";
            $execute_query2 = mysqli_query($connection,$insert_query2);
            if($execute_query)
            {
                header("location:Userhome.php");
                echo '<script>alert("Successfull !!!")</script>';
            }
            else
            {
                echo "<script>alert('no');</script>";
            }
        }
    }
    else
    {
        echo "There was an error!";
    }
