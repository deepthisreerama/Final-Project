<?php
$error = '';
  if(array_key_exists('phone_num', $_POST))
  {
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/', $_POST['phone_num']))
    {
      $error = 'Invalid Number!';
    }
  }
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<style>
input[type="radio"]{
    -webkit-appearance: radio;
}
.warning{
color:red;
}
</style>
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
<div class="container" style="height:680px;">
<div id="register">
 <h1 style="padding-bottom: 30px;padding-top:60px;color: #ea4c88;">Sign Up</h1>
 <form method = 'post' action = 'index.php'>
  <label class="reg-label"> First Name: </label><input class="text-field" type="text" name="firstname" value="" required/> </br> <br>
 <label class="reg-label"> Last Name: </label><input class="text-field" type="text" name="lastname" value="" required/> </br> <br>
  <label class="reg-label">  Email: </label><input class="text-field" type="text" name="email" value="" required/> </br> <br>
 <label class="reg-label"> Password: </label><input class="text-field" type="password" name="password" value="" required/> </br><br>
 <label class="reg-label">  Phone: </label><input class="text-field" type="text" name="phone_num" value="" required/> <span class="warning"> <?php echo $error; ?></span> </br> <br>
  <label class="reg-label">  Birthday: </label><input class="text-field" type="date" name="birthday" value="" required/> </br> <br>
  <label class="reg-label">  Gender: </label>
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="male">Male

  <input type="hidden" name="action" value="registrar" /></br></br>
  <input id = "submit_style" type="submit" value="Register" />
 </form>
 <form action="login.php" method = "post">
  <input id = "submit_style" type='submit' value='Login'/>
  
 </form>
 </div>
 </div>
</body>
</html>
