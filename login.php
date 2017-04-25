<html>
<body>
<h1> Sign In</h1>
<form method ="post" action="index.php">
<strong>Username:</strong><input type="text" name="email" value=""/><br><br>
<strong>Password:</strong><input type="password" name="password" value=""/><br><br>
<input type="hidden" name="action" value="check_login"/><br>
<input type="submit" value="Login"/>
</form>
<form action= "register.php">
 <input type="submit" value="Register"/>
</form>
</body>
</html>
