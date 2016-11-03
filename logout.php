<?php


session_start();
if(isset($_COOKIE['usernamel']) && isset($_COOKIE['passwordl'])){
	$usernamel=$_COOKIE['usernamel'];
	$passwordl=$_COOKIE['passwordl'];
setcookie('usernamel', $usernamel, time()-60*60);
setcookie('passwordl', $passwordl, time()-60*60);
}
echo "you have logout succesfully <br><br>";
echo "<a href='index.php'>login</a>";
session_destroy();

?>