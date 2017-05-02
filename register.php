<html>
<head>
<style>
input[type="radio"]{
    -webkit-appearance: radio;
}
</style>
  <link rel="stylesheet" href="style.css">
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
<div class="container" style="height:610px;">
<div id="register">
 <h1 style="padding-bottom: 30px;color: #ea4c88;">Sign Up</h1>
 <form method = 'post' action = 'index.php'>
  <label class="reg-label"> First Name: </label><input type="text" name="firstname" value="" required/> </br> <br>
 <label class="reg-label"> Last Name: </label><input type="text" name="lastname" value="" required/> </br> <br>
  <label class="reg-label">  Email: </label><input type="text" name="email" value="" required/> </br> <br>
 <label class="reg-label"> Password: </label><input type="password" name="password" value="" required/> </br><br>
 <label class="reg-label">  Phone: </label><input type="text" name="phone_num" value="" required/> </br> <br>
  <label class="reg-label">  Birthday: </label><input type="date" name="birthday" value="" required/> </br> <br>
  <label class="reg-label">  Gender: </label>
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="other">Others
                            

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
