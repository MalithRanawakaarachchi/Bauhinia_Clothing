<?php
    $connection=mysqli_connect('localhost','root','','dbbauhinia');

    if(!$connection)
    {
        echo ('Database connection failed!');
    }
?>