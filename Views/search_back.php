<?php
    require_once('connection.php');

    if(!empty($_POST)){
        $output = '';
        $Item_search=$_POST["item_search"];

        $select_search = "SELECT * FROM tblitems WHERE name LIKE '%{$Item_search}%'";
        $execute_select_search = mysqli_query($connection,$select_search);

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

                echo  ' <div class="justify-content-start clear-left container-fluid"> 
                        <div class="row col-12"> 
                        <?php
                                echo $div;
                        ?>    
                        </div>     
                        </div>  ';
    }
    else{
        echo "erro";
    }
?>