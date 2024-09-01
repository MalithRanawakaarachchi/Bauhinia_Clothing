<?php
    require_once('connection.php');

    if(!empty($_POST)){
        $output = '';
        $itemCode = $_POST["itemCode"];
        $category = $_POST["category"];
        $size = $_POST["categorysize"];
        $color = $_POST["categorycolor"];
        $qty = $_POST["qty"];
        $price = $_POST["price"];

        //Image Uploading Code
        if(isset($_POST['submitAddItem'])){
                
            $file_name = $_FILES['imageUpload']['name'];
            $file_type = $_FILES['imageUpload']['type'];
            $file_size = $_FILES['imageUpload']['size'];
            $temp_name = $_FILES['imageUpload']['tmp_name'];
      
            $upload_to = 'uploads/';
      
            move_uploaded_file($temp_name, $upload_to . $file_name);          
          
            $insert_query = "INSERT INTO tblitems (itemCode,category,size,color,qty,price,image) VALUES('$itemCode','$category','$size','$color','$qty','$price','$file_name')";
            $execute_query = mysqli_query($connection,$insert_query);

            if($execute_query)
            {
                echo '<script>alert("Image Inserted into Database")</script>';
                header("location:homeAdmin.php");
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
?>




                
                