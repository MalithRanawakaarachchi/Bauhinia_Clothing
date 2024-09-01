<?php
    //open database connection
    require_once('connection.php');
    //start session
    session_start();

    if(!isset($_SESSION['isLogged']))
    {
        header("Location:index.php?error");
    }
    if(!empty($_POST)){
        $email = $_POST['email'];
        $password= $_POST['password'];
        $msg="";
        //$encoded_password = base64_encode($password);

        $user_query = "SELECT * FROM tblcustomers WHERE email = '$email' AND password='$password' LIMIT 1";
        $admin_query = "SELECT * FROM tbladmin WHERE email = '$email' AND password='$password' LIMIT 1";

        $execute_user_query = mysqli_query($connection, $user_query);
        $execute_admin_query = mysqli_query($connection, $admin_query);

        if($execute_user_query || $execute_admin_query)
        {
            if(mysqli_num_rows($execute_admin_query)==1)
            {
                $admin = mysqli_fetch_assoc($execute_admin_query);

                $_SESSION['isLogged'] = true;
                $_SESSION['id'] = $admin['id'];
                $_SESSION['fName'] = $user['fName'];    
                $_SESSION['email'] = $user['email'];

                header('Location: homeAdmin.php');
            }
            else
            {
                if(mysqli_num_rows($execute_user_query)==1)
                {
                    $user = mysqli_fetch_assoc($execute_user_query);

                    $_SESSION['isLogged'] = true;
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['fName'] = $user['fName'];    
                    $_SESSION['email'] = $user['email'];
                    
                    header('Location: userHome.php');
                }
                else
                {
                    header('Location: index.php');
                    $msg = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>";
                    //echo "<script>alert('Invalid email and / or password');</script>";
                }
            }
        }
        else
        {
            echo ("database query error !!!");
        }
    }
?>