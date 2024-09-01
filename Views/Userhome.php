<?php
    session_start();
    if(!(isset($_SESSION['isLogged']) && $_SESSION['isLogged']))
    {
        header("Location:index.php");    
    }
    require_once('connection.php');

    $fName = $_SESSION['fName'];
    $email = $_SESSION['email'];
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to BAUHINIA</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="styles_for_BAUHINIA.css"/>

    <link rel="stylesheet" type="text/css" href="js/jquery-ui.min.css"/>

</head>
<body>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <nav class="navBack navbar navbar-expand-md fixed bg-dark navbar-dark col-12">
    <!--Div Group for slides-->
        <div id="myGroup" style="width:100%;">

        <!--second navbar-->
        
            
            <!--profile icon-->
            
                <div class="row">
                    <div class="row" style="width:97%;">
                        <div style="padding:0px 0px 0px 20px;">
                            <img src="../assets/logo.png" height="80px"; data-toggle="modal" data-target="#userDetailsModal">&nbsp &nbsp &nbsp &nbsp 
                        </div>
                        <div style="padding:15px 0px 0px 0px;">
                            <font color=white>Welcome <?php echo $fName; ?></font><br><font color=white size=2px><?php echo $email; ?></font>
                        </div>
                    </div>
                    <div style="padding:15px 0px 0px 0px;">
                    <!--toggler-->
                        <button class="navbar-toggler" style="outline-color:blue;" type="button" data-toggle="collapse" data-target="#menunv" aria-controls="navbarNav" area-expanded="false" aria-label="Toggle navigation"><!--<img src="../assets/toggler.png" height=25px;>--><span class="navbar-toggler-icon"></span></button>             
                        <button type="submit" name="profile" class="button" style="outline-color:blue;"> <img src="../assets/profile-icon.png" height="50px"; data-toggle="modal" data-target="#userDetailsModal"></button>
                    </div>
                </div>
           
         
         </div>
    </nav> 
<!--body start---------------------------------------------------------------------------------------------------------------------------------------------------------->
    <div class="row" >
            <!--book Categories Insert-->
            <div class="col-9" style="margin:10px 0px 0px 80px;">
                <select name="categorySearch" required  style="background-color:#ff7f02; color:white; outline-color:blue; border-radius:5px;">

                <option value=""><font color="#3778C2"> select category </font></option>
                <option value="fantasy"><font color="#3778C2"> T shirts </font></option>
                <option value="adventure"><font color="#3778C2"> shirts </option>
                <option value="mystery"><font color="#3778C2"> blouse </font></option>
                <option value="thriller"><font color="#3778C2"> skirts </font></option>
                <option value="children's"><font color="#3778C2"> Denim </font></option>
                <option value="westerns"><font color="#3778C2"> Trousers </font></option>
                <option value="romance"><font color="#3778C2"> Shorts </font></option>
                <option value="romance"><font color="#3778C2"> Other </font></option>

                </select>          
            </div>

            

                
                    
                <!--search bar-->
                <!-- <?php 
                    
                    // if(!empty($_POST["search_button"])){
                    //     $book_search="book_search";
                
                    //     $select_search = "SELECT * FROM tblbooks WHERE name LIKE '%{$book_search}%'";
                    //     $execute_select_search = mysqli_query($connection,$select_search);
                
                    //     $records_search ="";
                    //     $table_search = "";
                    //     if($execute_select_search)
                    //     {
                    //         $rowCount_search = mysqli_num_rows($execute_select_search);
                    //         for($i_search=0; $i_search<$rowCount_search; $i_search++)
                    //         {
                    //             $records_search = mysqli_fetch_assoc($execute_select_search);
                                        
                    //             $table_search.= '<tr style="background-color:#bfc4fe; transition:font-size 2s;" height=40>';
                    //             $table_search.= '<td style="max-width:15px;"><font size=3></font>'.$records_search['id'].'</td>';
                    //             $table_search.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; transition:text-size 2s;"><font size=3>'.$records_search['name'].'</font></td>';
                    //             $table_search.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font size=3>'.$records_search['year'].'</font></td>';
                    //             $table_search.= '<td ><font size=3>'.$records_search['category'].'</font></td>';
                    //             $table_search.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font size=3>'.$records_search['author'].'</font></td>';
                    //             $table_search.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font size=3>'.$records_search['publisher'].'</font></td>';
                    //             $table_search.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font size=3>'.$records_search['quantity'].'</td>';
                    //             $table_search.= '<td style=" max-width:30px;"> ';
                    //             $table_search.= '<button type="submit" onclick="viewEditBookModal(\''.$records_search['id'].'\',\''.$records_search['name'].'\',\''.$records_search['year'].'\',\''.$records_search['category'].'\',\''.$records_search['author'].'\',\''.$records_search['publisher'].'\',\''.$records_search['quantity'].'\')" name="btnEdit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalborrow">&nbsp;&nbsp; Edit &nbsp;&nbsp;</button> ';
                    //             $table_search.= '<button data-id='.$records_search['id'].' id="delete-book-'.$records_search['id'].'" onclick="viewDeleteBookModal('.$records_search['id'].')" type="submit" name="btnDelete" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#bookRemoveConfirm"> Remove </button>';
                    //             $table_search.= '</td>';
                    //             $table_search.= '</tr>';                         
                    //         }
                    //     }
                    // }else{
                    //     echo "error";
                    // }
                    
                ?> -->

                <div class="col-2">
                        <div class="border-styles" style="border-radius:25px; height:33px; border-color:#ff7f02; margin:10px;">
                            <div class=" float-left" style="width:12px; border-style:solid; border-color:transparent;"></div>
                        
                            <div class="float-left">
                                <input type="text" class="from-control float-left" id="book_search" name="book_search" placeholder="search.." style="width:240px; height:26px; border-color:transparent; background-color:#; outline:0;">
                            </div>
                            <div class="float-left" styles="width:35px;" align="right">
                                <!-- <button type="submit" name="search_button" class="button" style="margin:-15px -6.8px 15px 0px; outline:0;"><img src="../assets/search.png" height="32px;"></button> -->
                            </div>
                        </div>
                </div>
            
    </div>            

        <!--cards-->

        <!--php-->

        
        <?php
                    require_once('connection.php');
                    $select_query = 'SELECT * FROM tblitems';
                    $execute_query = mysqli_query($connection,$select_query);
                    $records ="";
                    $div = "";                   
                    if($execute_query)
                    {
                        $rowCount = mysqli_num_rows($execute_query);
                        for($i=0; $i<$rowCount; $i++)
                        {
                            $records = mysqli_fetch_assoc($execute_query);

                            //checke quantity
                            $availability ="";
                            if($records['qty']>0){
                                $availability="Available";
                                $color = "#00A572";
                            }
                            else{
                                $availability="Stock Out";
                                $color = "#ff0500";
                            }
                            $div.='<div class="col-xl-2 col-lg-4 col-md-6 col-sm-12 mt-2">';
                            $div.='<div class="card">';
                            $div.='<img class="card-img-top" src="uploads/'.$records['image'].'" height="360px;" alt="Card image cap">';
                            $div.='<div class="card-body">';
                            $div.='<h5 class="card-title">'.$records['itemCode'].'</h5>';
                            $div.='<p class="card-text">'.$records['price'].' LKR &nbsp &nbsp <font color="'.$color.'">'.$availability.'</font></p>';
                            $div.='<form action="buyitem.php" method="POST">';
                            $div.='<input type="hidden" name="id" value="'.$records['id'].'">';
                            $div.='<input type="hidden" name="itemCode" value="'.$records['itemCode'].'">';
                            $div.='<input type="hidden" name="color" value="'.$records['color'].'">';
                            $div.='<input type="hidden" name="price" value="'.$records['price'].'">';
                            $div.='<input type="hidden" name="image" value="'.$records['image'].'">';
                            $div.='<button type="submit" class="btn btn-primary">Buy Now</button> <a href="#" class="btn"><img src="../assets/cart.png" height="30px"></a>';
                            $div.='</form>';
                            $div.='</div>';
                            $div.='</div>';
                            $div.='</div>';
                        }
                    }
            ?>
                 
        <!--table css-->
        <div class="justify-content-start clear-left container-fluid"> 
                 <div class="row col-12"> 
                        <?php
                                echo $div;
                        ?>    
                 </div>     
        </div>  

    </br>
    </br>
    </br>
    </br>
    </br>
    </br>

        <!--bottom-->
        <!--bottom-->
        <div style="background-color:#3778C2;" class="row">
                <div class="justify-content-center col-12" align="center" style="color:yellow; font-family:Calibri Light (Headings);">
                    </br>
                    <h7>BAUHINIA Clothing</h7></br>
                    <h7>No.34</h7></br>
                    <h7>De kretser Pl</h7></br>
                    <h7>Colombo - 06</h7></br>
                    <h7>Contact +94 11 400 4633</h7></br>
                    <h7>E-mail :<a href=""><font color="yellow"> www.bauhinia.lk</font></a></h7>
                    </br>
                    </br>
                </div>
        </div>

    </div>


    
    
</body>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>

<script>

$(document).ready(function(){
    $('#insert').click(function(){
        var image_name = $('#image').val();
        if(image_name=='')
        {
            alert("Please select image");
            return false;
        }
        else
        {
            var extension = $('#image').val().split('.').pop().toLowerCase();
            if(jQuery.inArray(extension, ['gif','png','jpg','jpeg'])==-1)
            {
                alert('Invalid Image File');
                $('#image').val('');
                return false;
            }
        }
    });   
});


function buyitempage(id,itemCode,color,price,image){

    console.log(id);
    document.getElementById("id").value = id;

    window.location.reload(`buyitem.php?id=${id}`);
}

</script>

</html>