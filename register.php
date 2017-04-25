<html>
<body>
 <h1> Sign Up</h1>
 <form method = 'post' action = 'index.php'>
  <strong> First Name: </strong><input type="text" name="firstname" value="" required/> </br> </br>
  <strong> Last Name: </strong><input type="text" name="lastname" value="" /> </br> </br>
  <strong> Email: </strong><input type="text" name="email" value="" required/> </br> </br>
  <strong> Password: </strong><input type="password" name="password" value="" required/> </br></br>
  <strong> Phone: </strong><input type="text" name="phone_num" value="" required/> </br> </br>
  <strong> Birthday: </strong><input type="date" name="birthday" value="" required/> </br> </br>
  <strong> Gender: </strong><input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="other">Others
  <input type="hidden" name="action" value="registrar" /></br></br>
  <input type="submit" value="Register" />
 </form>
 <form action="login.php" method = "post">
  <input type='submit' value='try to login'/>
 </form>
</body>
</html>
