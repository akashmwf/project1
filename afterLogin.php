
<?php
include 'connect.php';
   
  // $con = mysql_connect('localhost','root','','my_db');
	//				if(!$con){
	//					die("cannot connect <br>".mysql_error());
		//			}
					
	if(isset($_POST['login'])) {
	$usernamel=$_POST['usernamel'];
	$passwordt=$_POST['passwordl'];	// passwordt = temporary password
    $passwordl=md5($passwordt);	
	$rem=isset($_POST['remember']);// cookie and session
	
	
	
	if(!mysql_select_db("my_db")){ echo "unable to connect to database".mysql_error(); exit;}
	
		$sql = "SELECT * 
        FROM   profile
        WHERE  user='$usernamel' AND password='$passwordl'";

$result = mysql_query($sql);

if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}

if (mysql_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}

// While a row of data exists, put that row in $row as an associative array
// Note: If you're expecting just one row, no need to use a loop
// Note: If you put extract($row); inside the following loop, you'll
//       then create $userid, $fullname, and $userstatus
while ($row = mysql_fetch_assoc($result)) {
	
	$user =$row["user"];
	$email = $row['email'];
	$pass =$row['password'];
	$dob=$row['dob'];
	$gender=$row['gender'];
	$mobile=$row['mobile'];
	$state=$row['state'];
	$city=$row['city'];
	$pin=$row['pincode'];
	$type=$row['user_type'];
	
	$allowed = array('jpg','jpeg','png');
////	$file_ext=
	$file_destination='uploads/'.$user.'.jpg';
	
	
	if(isset($_POST['remember'])){
			setcookie('usernamel', $usernamel, time()+60*60);
			setcookie('passwordl', $passwordl, time()+60*60);
			}
			session_start();
			$_SESSION['usernamel']=$usernamel;
			
		
	echo $type."<br>";
    echo "Hello,".$row["user"]."! You are Succesfully Logged In";
	include 'profile.php';

   
}

mysql_free_result($result);	
					
	}
					
					
  // echo $sql="select user from profile where user = '$username' and password= '$password'";
   //echo var_dump($sql);
   
  //mysql_select_db("my_db",$con);
//$output= mysql_query($sql, $con);
//echo mysql_error($sql);
//if(!$output){ echo "error:".mysql_error();}
//echo $output;
//while (mysql_fetch_assoc())


?>