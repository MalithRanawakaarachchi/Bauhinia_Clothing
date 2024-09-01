<?php
     session_start();
    if(!(isset($_SESSION['isLogged']) && $_SESSION['isLogged']))
    {
        header("Location:index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="styles_for_BAUHINIA.css"/>
    
    <style>
        .bg {
                background-image: url(../assets/adminHomepic.jpg);    
                height: 100%; 
                background-position: relative;
                background-repeat: no-repeat;
                background-size: 100%;
            }

        .marginAdmin{
                margin-top: 20%;
        }
    </style>
</head>

<body class="bg">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<div class="menu">
    <?php include 'menu.php';?>
</div>  


    <div class="col-12 marginAdmin" style="text-align:center;">
    <button type="" name="userHome" class="btn btn-warning center" style="outline-color:blue;"> <a href="Userhome.php" style="color:black;">Visit Web View</a> </button>&nbsp 
    <button type="" name="userHome" class="btn btn-success center" style="outline-color:blue;" data-toggle="modal" data-target="#dataModal">&nbsp Add an Item &nbsp</button>
    </div>

    <!--add an item modal-->

    <div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="additemBack.php" method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <div class="col-12 col-xl-10 col-lg-10 col-md-10 col-sm-10 text-left">
                    <font color="#3778C2">Item Code</font>
                </div>
                <div class="col-12 col-xl-10 col-lg-10 col-md-10 col-sm-10"> 
                    <input type="text" name="itemCode" class="textbox outline-border" id="txtitemCode"> 
                </div>
                <div class="col-12" style="height:20px;">  </div>
                <div class="col-12 col-xl-10 col-lg-10 col-md-10 col-sm-10 text-center">
                    <select name="category" required class="bg-primary" style="border-color:#3778C2; color:white; outline-style:none; border-radius:5px;" id="Category">

                        <option value=""><font color="#3778C2"> select category </font></option>
                        <option value="T shirts"><font color="#3778C2"> T shirts </font></option>
                        <option value="shirts"><font color="#3778C2"> shirts </option>
                        <option value="blouse"><font color="#3778C2"> blouse </font></option>
                        <option value="skirts"><font color="#3778C2"> skirts </font></option>
                        <option value="Denim"><font color="#3778C2"> Denim </font></option>
                        <option value="Trousers"><font color="#3778C2"> Trousers </font></option>
                        <option value="Shorts"><font color="#3778C2"> Shorts </font></option>
                        <option value="Other"><font color="#3778C2"> Other </font></option>
                       

                    </select>   
                </div>
                <div class="col-12" style="height:20px;">  </div>
                <div class="col-12 col-xl-10 col-lg-10 col-md-10 col-sm-10 text-center">
                    <select name="categorysize" required class="bg-primary" style="border-color:#3778C2; color:white; outline-style:none; border-radius:5px;" id="Categorysize">

                        <option value=""><font color="#3778C2"> select Size </font></option>
                        <option value="XXS"><font color="#3778C2"> XXS </font></option>
                        <option value="XS"><font color="#3778C2"> XS </option>
                        <option value="S"><font color="#3778C2"> S </font></option>
                        <option value="M"><font color="#3778C2"> M </font></option>
                        <option value="L"><font color="#3778C2"> L </font></option>
                        <option value="XL"><font color="#3778C2"> XL </font></option>
                        <option value="XXL"><font color="#3778C2"> XXL </font></option>

                    </select>   
                </div>
                <div class="col-12" style="height:20px;">  </div>
                <div class="col-12 col-xl-10 col-lg-10 col-md-10 col-sm-10 text-center">
                    <select name="categorycolor" required class="bg-primary" style="border-color:#3778C2; color:white; outline-style:none; border-radius:5px;" id="Categorycolor">

                        <option value=""><font color="#3778C2"> select colour </font></option>
                        <option value="Red"><font color="#3778C2"> Red </font></option>
                        <option value="Green"><font color="#3778C2"> Green </option>
                        <option value="Blue"><font color="#3778C2"> Blue </font></option>
                        <option value="Yellow"><font color="#3778C2"> Yellow </font></option>
                        <option value="White"><font color="#3778C2"> White </font></option>
                        <option value="Black"><font color="#3778C2"> Black </font></option>
                        <option value="Orange"><font color="#3778C2"> Orange </font></option>
                        <option value="Gray"><font color="#3778C2"> Gray </font></option>
                        <option value="Pink"><font color="#3778C2"> Pink </font></option>
                        <option value="Brown"><font color="#3778C2"> Brown </font></option>
                        <option value="Free Colour"><font color="#3778C2"> Free Colour </font></option>

                    </select>   
                </div>
                <div class="col-12" style="height:20px;">  </div>
                <div class="col-12 col-xl-12 col-lg-10 col-md-10 col-sm-10 text-left">
                    <font color="#3778C2">Quantity</font>
                </div>
                <div class="col-12 col-xl-12 col-lg-10 col-md-10 col-sm-10"> 
                    <input type="text" name="qty" class="textbox outline-border" id="txtqty"> 
                </div>
                <div class="col-12" style="height:20px;">  </div>
                <div class="col-12 col-xl-12 col-lg-10 col-md-10 col-sm-10 text-left">
                    <font color="#3778C2">Price</font>
                </div>
                <div class="col-12 col-xl-12 col-lg-10 col-md-10 col-sm-10"> 
                    <input type="text" name="price" class="textbox outline-border" id="txtprice"> 
                    <font color="#3778C2">lkr</font>
                </div>
                <div class="col-12" style="height:20px;">  </div> 
                <div>
                    <input type="file" name="imageUpload" id="imageUpload"/>
                </div>
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submitAddItem" id="btnAddItem" class="btn btn-primary">Save Item</button>
            <p id="form-message"></p>
      </div>
      </form>
    </div>
  </div>
</div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>

<!-- <script>
    function viewBorrowBookModal(book_id,user_id){
        document.getElementById("Book_id").value=book_id;
        document.getElementById("User_id").value=user_id;
    }
</script> -->
</html>