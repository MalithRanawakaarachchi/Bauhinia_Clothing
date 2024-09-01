<?php 
    require_once('connection.php');
    
    if(!empty($_POST)){
        $output = '';
        $admin_id=$_POST["admin_id_save"];
        $admin_fName=$_POST["admin_fName_save"];
        $admin_lName=$_POST["admin_lName_save"];
        $admin_nic=$_POST["admin_nic_save"];
        $admin_email=$_POST["admin_email_save"];
        $admin_address=$_POST["admin_address_save"];
        $admin_contact=$_POST["admin_contact_save"];
        $admin_password=$_POST["admin_password_save"];
        $admin_current_password=$_POST["current_password"];

        $select_query_admin = "SELECT * FROM tbladmin WHERE adminid='$admin_id'";
        $execute_admin_query = mysqli_query($connection, $select_query_admin);
        $records_admin = mysqli_fetch_assoc($execute_admin_query);

        if($records_admin['password']==$admin_current_password){
            if($execute_admin_query && $admin_password != "")
            {
                $Update_Query = ("UPDATE tbladmin SET adminid='$admin_id', firstName='$admin_fName', lastName='$admin_lName', email='$admin_email', password='$admin_password', admin_nic='$admin_nic', admin_address='$admin_address', admin_contact='$admin_contact' WHERE adminid=$admin_id");
                $execute_query = mysqli_query($connection,$Update_Query);

                if($execute_query)
                {
                    header("location:homeAdmin.php");
                }
                else
                {
                    echo "<script>alert('no');</script>";
                }
            }
            else if($select_query_admin && $admin_password == "")
            {
                $Update_Query = ("UPDATE tbladmin SET adminid='$admin_id', firstName='$admin_fName', lastName='$admin_lName', email='$admin_nic', admin_nic='$admin_nic', admin_address='$admin_address', admin_contact='$admin_contact' WHERE adminid=$admin_id");
                $execute_query = mysqli_query($connection,$Update_Query);
    
                if($execute_query)
                {
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
            
            //header("location:homeAdmin.php");
            //echo "<script>var admin_confirm_button function(){document.getElementById('password_message').style.color = 'red';document.getElementById('messagepassword_message').innerHTML = 'Wrong Password !!!';}</script>";
            echo "Wrong Password !!!";
        }      
    }
    else
    {
        echo "There was an error!";
    }
?>