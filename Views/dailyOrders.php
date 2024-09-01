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

        tr{
            background-color: rgba(150,212,212,0.4);
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
                    $insert_query = "SELECT * FROM tblorders WHERE date='$today'";
                    $execute_query = mysqli_query($connection,$insert_query);
                    $records ="";
                    $table = "";
                    if($execute_query)
                    {
                        $rowCount = mysqli_num_rows($execute_query);
                        for($i=0; $i<$rowCount; $i++)
                        {
                            $records = mysqli_fetch_assoc($execute_query);
                           
                            $table.= '<tr class="table11" style="background-color:#bfc4fe; transition:font-size 2s;" height=40>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=3><b>'.$records['firstName'].'</b></font></td>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=3><b>'.$records['lastName'].'</b></font></td>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=3><b>'.$records['email'].'</b></font></td>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=3><b>'.$records['address'].'</b></font></td>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=3><b>'.$records['mobile'].'</b></font></td>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=3><b>'.$records['hotline'].'</b></font></td>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=3><b>'.$records['itemCode'].'</b></font></td>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=3><b>'.$records['size'].'</b></font></td>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=3><b>'.$records['color'].'</b></font></td>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=3><b>'.$records['qty'].'</b></font></td>';
                            $table.= '<td style="white-space: nowrap; overflow:hidden; text-overflow: ellipsis; "><font face=calibri color=black size=3><b>'.$records['paymentMethod'].'</b></font></td>';
                            $table.= '</tr>';                     
                        }
                    }
            ?>
        
        <div style="height:40px;"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-10"></div>
                <div class="col-2">
                    <input type="date" id="datepicker" placeholder="Select date" class="bg-light form-control" name="issueDate" style="width:100%; border-style:solid; border-color:#4e4e4c; border-radius:5px; color:black;">
                </div>
            </div>
        </div>

        <!--table css-->
        <div class="row justify-content-center clear-left">
            <div class="table-responsive col-11">
            <p><font color=yellow size=6>Daily Orders</font></p>
                <table action="addnewbookBack.php" class="table table-striped" style="opacity:0.85; background:transarent;">
                    
                        <tr class="bg-dark" height=30>
                            <td class="color" style="width:10%"><font size=3 color="white">First Name</font></td>
                            <td class="color" style="width:10%"><font size=3 color="white">Last Name</font></td>
                            <td class="color" style="width:15%"><font size=3 color="white">Email</font></td>
                            <td class="color" style="width:26%"><font size=3 color="white">Address</font></td>
                            <td class="color" style="width:7%"><font size=3 color="white">Mobile</font></td>
                            <td class="color" style="width:7%"><font size=3 color="white">Hotline</font></td>
                            <td class="color" style="width:9%"><font size=3 color="white">Item Code</font></td>
                            <td class="color" style="width:2%"><font size=3 color="white">Size</font></td>
                            <td class="color" style="width:4%"><font size=3 color="white">Colour</font></td>
                            <td class="color" style="width:5%"><font size=3 color="white">Quantity</font></td>
                            <td class="color" style="width:5%"><font size=3 color="white">Cash/Card</font></td>
                        </tr>
                            <?php
                                echo $table;
                            ?>
                </table>
            </div>
        </div>  

</body>
</html>