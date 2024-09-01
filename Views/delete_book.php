<?php
require_once('connection.php');
if(!empty($_POST)){
    
    $book_id = $_POST["delete_book_id"];
    $delete_query = "DELETE FROM tblbooks WHERE id='".$book_id."'";
    $exe_query = mysqli_query($connection,$delete_query);
    if($exe_query){
        header("location:homeAdmin.php");
        echo "Book deleted!";
    }else{
        echo "error";
    }
}
else{
    echo "There was an error!";
}
    
?>