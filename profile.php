<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 </head>

<body>

<div class="jumbotron">
<h1 align="center">Welcome to your profile , <?php echo $user;?>!!!</h1></div>


<div class="jumbotron" style="font-size:20px; padding: 25px 50px 75px 350px;"> NAME: <?php echo $user;?> <br><br>
DATE OF BIRTH:<?php echo $dob;?><br><br>
GENDER:<?php echo $gender;?><br><br>
EMAIL:<?php echo $email;?><br><br>
MOBILE NO.:<?php echo $mobile;?><br> <br>
STATE:<?php echo $state;?><br> <br>
CITY:<?php echo $city;?><br><br>
PIN CODE:<?php echo $pin;?><br><br>
LANGUAGES KNOWN:<?php echo $aoi ?><br><br><br><br>
IMAGE: <?php  

			echo "<img src=\"$file_destination\"  />";
			echo "<br><br><br><br>"?>
			
<?php   

if($type==1){ // if user type is 1 then he/she is the admin else normal user 
?>	

<form method="post" action= "admin.php">
<input type="submit" value="ADMIN PRIVILEGES" name="admin_p"/>
</form>	
<?php	
}
?>			
<br>
<br>
<br>


</div>

</body>


</html>


<?php

echo "<a href='logout.php'>logout</a>";

?>
<br>