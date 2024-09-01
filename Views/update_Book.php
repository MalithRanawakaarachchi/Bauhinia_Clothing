<?php
     require_once('connection.php');

     if(!empty($_POST)){
         $output = '';
         $id = $_POST["edit_book_id"];
         $name = $_POST["edit_book_name"];
         $year = $_POST["edit_book_year"];
         $category = $_POST["edit_book_category"];
         $author = $_POST["edit_book_author"];
         $publisher = $_POST["edit_book_publisher"];
         $qty = $_POST["edit_book_qty"];

         $Update_Query = ("UPDATE tblbooks SET name='$name', year='$year', category='$category', author='$author', publisher='$publisher', quantity='$qty' WHERE id=$id");
         $execute_query = mysqli_query($connection,$Update_Query);

         if($execute_query)
        {
            echo "<script>alert('Book Updated');</script>";
            header("location:homeAdmin.php");
        }
        else
        {
            echo "<script>alert('no');</script>";
        }
    }
    else
    {
        echo "There was an error!";
    }
?>
