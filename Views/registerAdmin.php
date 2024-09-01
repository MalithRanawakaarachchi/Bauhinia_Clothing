
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="styles_for_BAUHINIA.css" />
    <title>Signup for Administrators</title>

<style>
    
        .bg {
                background-image: url(../assets/fashion-store.jpg);    
                height: 100%; 
                background-position: relative;
                background-repeat: no-repeat;
                background-size: 100%;
            }
        
        .backgroun-color{
            background-color:rgba(255,255,255,0.8);
        }

        .radius{
            border-radius:15px; box-shadow: 0px 0px 10px 0px;
        }
    
</style>

<script>

    //new user
    $(document).ready(function() {
        $("#form-newUser").on('submit',function(event){
            event.preventDefault();
            if($('#aaa').val()=="")
            {
                alert("Name is required");
            }
            else
            {
                $.ajax({
                    url:"newAccountBack.php",
                    method:"POST",
                    data:$('#form-newUser').serialize(),
                    success:function(data){
                        //$('#form-newUser')[0].reset();
                        // $('').html(data);
                    }
                });
            }
        });
    });
</script>


</head>
<body class="bg">
    <div class="menu">
        <?php include 'menu.php';?>
    </div>

    <form class="" action="" method="post" id="form-newUser">
        <div class="container block-styles7" align="center">
            <div class="radius background-styles3 backgroun-color row col-xl-6 col-lg-6 col-md-8 justify-content-center">
            
                <div class="col-12" style="height:10px;">  </div>
                <div class="col-12"> 
                    <font face="Arial" size=8>Signup for Administrators</font> 
                </div>
                <div class="empty-div-height2 col-12">  </div>
                <div class="col-12" style="height:10px;"></div>
                <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6"> 
                    <input type="text" name="fName" placeholder="First Name" class="textbox text-center outline-border"> 
                </div>                   
                <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6"> 
                    <input type="text" name="lName" placeholder="Last Name" class="textbox text-center outline-border"> 
                </div>
                <div class="empty-div-height2 col-12">  </div>                  
                <div class="col-12"> 
                    <input type="text" name="email" placeholder="Email Address" class="textbox text-center outline-border"/> 
                </div>
                <div class="empty-div-height2 col-12">  </div>
                <div class="col-12"> 
                    <input type="text" name="address" placeholder="Address" class="textbox text-center outline-border"/> 
                </div>
                <div class="empty-div-height2 col-12">  </div>  
                <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6"> 
                    <input type="text" name="mobile" placeholder="Mobile" class="textbox text-center outline-border"> 
                </div>  
                <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6"> 
                    <input type="text" name="hotline" placeholder="Hotline" class="textbox text-center outline-border"> 
                </div>           
                <div class=" empty-div-height2 col-12">  </div>
                <div class="col-12" style="height:10px;">  </div>         
                <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6" align="center"> 
                    <input type="text" name="newPassword" placeholder="New password" class="textbox text-center outline-border"> 
                </div>                   
                <div class="empty-div-height2 col-12">  </div>
                <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6" align="center"> 
                    <input type="text" name="password" placeholder="Confirm password" class="textbox text-center outline-border"> 
                </div>
                <div class="empty-div-height2 col-12">  </div>
                <div class="empty-div-height2 col-12">  </div>
                <div class="empty-div-height2 col-12">  </div>
                <div class="button-height col-12"> 
                    <a href="index.php"> <button type="submit" id="submit" name="createAccount" class="button-size btn btn-primary btn-sm"> <font color="white">Create Account</font> </button> </a>
                </div>
                <div class="empty-div-height2 col-12">  </div>
                <div class="empty-div-height2 col-12">  </div>
            
            </div>
        </div>
    </form>
</body>
</html>