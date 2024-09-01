<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="styles_for_BAUHINIA.css" />
    <title>Inventory</title>

    <style>
        .bg {
                background-image: url(../assets/fashion-store.jpg);    
                height: 100%; 
                background-position: relative;
                background-repeat: no-repeat;
                background-size: 100%;
            }
    </style>
</head>

<body class="bg">

    <div class="menu">
        <?php include 'menu.php';?>
    </div>
                <?php
                        require_once('connection.php');
                        $insert_query = 'SELECT * FROM tblitems';
                        $execute_query = mysqli_query($connection,$insert_query);
                        $records ="";
                        $table = "";
                        if($execute_query)
                        {
                            $rowCount = mysqli_num_rows($execute_query);
                            for($i=0; $i<$rowCount; $i++)
                            {
                                $records = mysqli_fetch_assoc($execute_query);
                            
                                $table.='<input type="hidden" name="borrow_id" value="'.$records['id'].'">';
                                $table.= '<tr class="table11" style="background-color:#bfc4fe; transition:font-size 2s;" height=40>';
                                $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=4><b>'.$records['itemCode'].'</b></font></td>';
                                $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=4><b>'.$records['category'].'</b></font></td>';
                                $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=4><b>'.$records['size'].'</b></font></td>';
                                $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=4><b>'.$records['color'].'</b></font></td>';
                                $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=4><b>'.$records['qty'].'</b></font></td>';
                                $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=4><b>'.$records['price'].'</b></font></td>';
                                $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=4><b>'.$records['image'].'</b></font></td>';
                                $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; ">';
                                $table.= '<button type="submit" onclick="editModal()" class="btn btn-warning btn-sm" style="width:100px;" data-toggle="modal" data-target="#handOverConform">Edit</button>';
                                $table.= '</td>';
                                $table.= '</tr>';                     
                            }
                        }
                ?>

            <div style="height:80px;"></div>

            <!--table css-->
            <div class="row justify-content-center clear-left">
                <div class="table-responsive col-9">
                <p><font color=yellow size=6>Inventory</font></p>
                    <table action="" class="table table-striped" style="opacity:0.8; background:transarent;">
                        
                            <tr class="bg-dark" height=30>
                                <td class="color" style="width:%"><font size=3 color="white">Item Code</font></td>
                                <td class="color" style="width:%"><font size=3 color="white">Category</font></td>
                                <td class="color" style="width:%"><font size=3 color="white">Size</font></td>
                                <td class="color" style="width:%"><font size=3 color="white">Colour</font></td>
                                <td class="color" style="width:%"><font size=3 color="white">Quantity</font></td>
                                <td class="color" style="width:%"><font size=3 color="white">Price</font></td>
                                <td class="color" style="width:%"><font size=3 color="white">Image Name</font></td>
                                <td class="color" style="width:8%"><font size=3 color="white">Edit Items</font></td>
                            </tr>
                                <?php
                                    echo $table;
                                ?>
                    </table>
                </div>
            </div>  
        
</body>
</html>