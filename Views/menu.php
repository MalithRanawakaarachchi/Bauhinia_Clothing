<?php
    //session_start();
    // require_once('connection.php');
    // $fName = $_SESSION['fName'];
    // $email = $_SESSION['email'];

echo '<nav class="navbar navbar-expand-md fixed bg-dark navbar-dark col-12">
        <div class="row col-12">
            <div class="row" style="width:60%;">
                <div>       
                    <img src="../assets/logo.png" height="80px";>
                </div>    
                <div style="padding:18px;">
                    <font color=white>Welcome</font><br><font color=white size=2px><?php echo $email; ?></font>
                </div>
            </div>
            
                <!--navbar links list-->
            <div class="collapsein navbar-collapse js-navbar-collapse justify-content" id="menunv" style=" width:38%;">
                    
                <ul class="nav navbar-nav justify-content-center">
                        
                    <li>
                        <a  href="homeAdmin.php" style="color:yellow; text-decoration:none;" aria-controls="collapseExample" aria-expanded="false" aria-label="Toggle navigation">Home</a>                   
                    </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li>
                        <a href="availableList.php" style="color:yellow; text-decoration:none;" aria-controls="collapseExample2" aria-expanded="false" aria-label="Toggle navigation">Available List</a>
                    </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li>
                        <a  href="dailyOrders.php" style="color:yellow; text-decoration:none;" aria-controls="collapseExample3" aria-expanded="false" aria-label="Toggle navigation">Daily Orders</a>
                    </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li>
                        <a  href="monthlyIncome.php" style="color:yellow; text-decoration:none;" aria-controls="collapseExample3" aria-expanded="false" aria-label="Toggle navigation">Monthly Income</a>
                    </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li>
                        <a  href="inventory.php" style="color:yellow; text-decoration:none;" aria-controls="collapseExample3" aria-expanded="false" aria-label="Toggle navigation">Inventory</a>
                    </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li>
                        <a  href="registerAdmin.php" style="color:yellow; text-decoration:none;" aria-controls="collapseExample3" aria-expanded="false" aria-label="Toggle navigation">Register</a>
                    </li>
                    
                </ul> 
            </div> 

            <div style="width:2%; padding:12px;">

                <button type="submit" name="profile" class="button" style="outline-color:blue;"> <img src="../assets/profile-icon.png" height="50px"; data-toggle="modal" data-target="#userDetailsModal"></button>
            
            </div>
            
        </div>
    </nav>';
?>