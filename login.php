<?php 
if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
    
     $message = "User Added Successfully!!";
}
if ( isset($_GET['error']) && $_GET['error'] == 1 )
{
    
     $error = "Email address does not exist!!";
}
if ( isset($_GET['error2']) && $_GET['error2'] == 1 )
{
     
     $error = " Wrong password, please try again using the same e-mail address!!";
}
?>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="clouds" >
            <div class="cloud x1"></div>
            <!-- Time for multiple clouds to dance around -->
            <div class="cloud x2"></div>
            <div class="cloud x3"></div>
            <div class="cloud x4"></div>
            <div class="cloud x5"></div>
        </div>

        <div class="container">
            <div id="login">
                
                <h1 class="heading-style" style="width:500px;color:black;"> To-do list web application </h1>
                <h3 class="heading-style" style="width:500px;color:blue;"> <?php echo $success;?> </h3>
                <h3 class="heading-style" style="width:500px;color:red;"> <?php echo $error;?> </h3>
                <h1 class="heading-style"> Sign In</h1>
                <form method ="post" action="controller/index.php">
                    <strong class="text-label">Username:</strong><input style="color:#ea4c88 !important;" type="text" name="email" value=""/><br>
                    <strong class="text-label">Password:</strong><input style="color:#ea4c88 !important;" type="password" name="password" value=""/><br>
                    <input type="hidden" name="action" value="check_login"/><br>
                    <input type="submit" value="Login"/>
                </form>
                <form action= "view/register.php">
                    <input type="submit" value="Register"/>
                </form>
            </div>
        </div>
    </body>
</html>
