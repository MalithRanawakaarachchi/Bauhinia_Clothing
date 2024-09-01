<?php
    require_once('connection.php');
    session_start();

    if(!empty($_POST)){
        $output = '';
        $firstName = $_POST['fName'];
        $lastName = $_POST['lName'];
        $email= $_POST['email'];
        $address= $_POST['address'];
        $mobile= $_POST['mobile'];
        $hotline= $_POST['hotline'];
        $password= $_POST['password'];
    
        $insert_query = "INSERT INTO tblcustomers (fName,lName,email,address,mobile,hotline,password) VALUES('$firstName','$lastName','$email','$address','$mobile','$hotline','$password')";
        $execute_query = mysqli_query($connection,$insert_query);

        if($execute_query)
        {
            echo '<alert>ok</alert>';
            header("Location:index.php");
        }
        else
        {
            echo mysqli_error($connection);
        }
    }
    else
    {
        echo "There was an error!";
    }
?>