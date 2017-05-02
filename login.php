<html>
<head>
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
<div class="container">
<div id="login">
<h1 class="heading-style"> Sign In</h1>
<form method ="post" action="index.php">
<strong class="text-label">Username:</strong><input style="color:#ea4c88 !important;" type="text" name="email" value=""/><br>
<strong class="text-label">Password:</strong><input style="color:#ea4c88 !important;" type="password" name="password" value=""/><br>
<input type="hidden" name="action" value="check_login"/><br>
<input type="submit" value="Login"/>
</form>
<form action= "register.php">
 <input type="submit" value="Register"/>
</form>
</div>
</div>
</body>
</html>
