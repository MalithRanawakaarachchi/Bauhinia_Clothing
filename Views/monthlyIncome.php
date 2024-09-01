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
                background-image: url(../assets/fashion-store.jpg);    
                height: 100%; 
                background-position: relative;
                background-repeat: no-repeat;
                background-size: 100%;
            }
    </style>
</head>
<body class="bg">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <div class="menu">
        <?php include 'menu.php';?>
    </div>

    <?php
                    require_once('connection.php');
                    $today = date("Y/m/d");
                    $insert_query = "SELECT * FROM tblorders";
                    $execute_query = mysqli_query($connection,$insert_query);
                    $records ="";
                    $table = "";
                    if($execute_query)
                    {
                        $rowCount = mysqli_num_rows($execute_query);
                        for($i=0; $i<$rowCount; $i++)
                        {
                            $records = mysqli_fetch_assoc($execute_query);
                            $total = $records['price']*$records['qty'];
                           
                            $table.= '<tr class="table11" style="background-color:#bfc4fe; transition:font-size 2s;" height=40>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=4><b>'.$records['date'].'</b></font></td>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=4><b>'.$records['itemCode'].'</b></font></td>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=4><b>'.$records['size'].'</b></font></td>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=4><b>'.$records['color'].'</b></font></td>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=4><b>'.$records['paymentMethod'].'</b></font></td>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=4><b>'.$records['price'].'&nbspLKR</b></font></td>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=4><b>'.$records['qty'].'</b></font></td>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=4><b>'.$total.'&nbspLKR</b></font></td>';
                            $table.= '</tr>';                     
                        }
                    }
            ?>
        
        <div style="height:40px;"></div>
        <div class="row justify-content-center">
            
                
                    <div class="col-2">
                        <input type="text" name="totalIncome" value="Monthly Income:    8845340 LKR" style="width:100%;" class="text-center">
                    </div>
                    <div class="col-6"></div>
                    <div class="col-2">
                        <input type="date" id="datepicker" placeholder="Select date" class="bg-light form-control" name="issueDate" style="width:100%; border-style:solid; border-color:#4e4e4c; border-radius:5px; color:black;">
                    </div>
                
            
        </div>

        <!--table css-->
        <div class="row justify-content-center clear-left">
            <div class="table-responsive col-10">
            <p><font color=yellow size=6>Monthly Income</font></p>
                <table action="addnewbookBack.php" class="table table-striped" style="opacity:0.85; background:transarent;">
                    
                        <tr class="bg-dark" height=30>
                            <td class="color" style="width:%"><font size=3 color="white">Date</font></td>
                            <td class="color" style="width:%"><font size=3 color="white">Item Code</font></td>
                            <td class="color" style="width:%"><font size=3 color="white">Size</font></td>
                            <td class="color" style="width:%"><font size=3 color="white">Colour</font></td>
                            <td class="color" style="width:%"><font size=3 color="white">Cash/Card</font></td>
                            <td class="color" style="width:%"><font size=3 color="white">Price</font></td>
                            <td class="color" style="width:%"><font size=3 color="white">Quantity</font></td>
                            <td class="color" style="width:12%"><font size=3 color="white">Total Payment</font></td>
                        </tr>
                            <?php
                                echo $table;
                            ?>
                </table>
            </div>
        </div>  

</body>
</html>