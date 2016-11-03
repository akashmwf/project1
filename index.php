

<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
<div class="container" style="background-color:grey;">
<div class="jumbotron">
<form method="post" action="afterLogin.php" align="center" >
<h1> LOGIN HERE</h1>
USERNAME:
<input type="text" name="usernamel" /> <br><br>
PASSWORD:
<input type="password" name="passwordl"/><br><br>
REMEMBER ME:
<input type="checkbox" name="remember" value="1" /> <br><br>
<input type="submit" value="Login" name="login"/>
</form>
<br> </div>

<?php

	if(isset($_COOKIE['usernamel']) && isset($_COOKIE['passwordl'])){
	$usernamel=$_COOKIE['usernamel'];
	$passwordl=$_COOKIE['passwordl'];
	echo"<script>
	document.getElementById('usernamel').value='$usernamel';
	document.getElementById('passwordl').value='$passwordl';
	</script>";
	}



?>

<br>
<div align="center" class="jumbotron">
<form method="post" action="register.php" >
<h2>NEW USER?</h2><br> <br>
<input type="submit" value="Register Here" name="register">
</form>
</div>
</div>
</body>
</html>


