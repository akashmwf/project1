<?php
include('connect.php');
$sql=mysql_query("select * from profile");
$epr=$msg='';
if($sql === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

if(isset($_GET['epr']))
	$epr=$_GET['epr'];

//=========================save record===============================

if($epr=='save')
{
	$user=$_POST['txtuser'];
	$dob=$_POST['txtdob'];
	$gender=$_POST['txtgender'];
	$email=$_POST['txtemail'];
	$mobile=$_POST['txtmobile'];
	$state=$_POST['txtstate'];
	$city=$_POST['txtcity'];
	$pincode=$_POST['txtpin'];
	 $lang = implode(',', $_POST['txtlanguage']);
	$a_sql=mysql_query("INSERT INTO profile(user, dob, gender, email , mobile , state , city , pincode, language ) VALUES('$user', '$dob', '$gender' ,'$email', '$mobile' , '$state' , '$city' , '$pincode', '$lang')");
	if($a_sql)
		header("location:admin.php");
	else 
		$msg=' ERROR(a_sql):'.mysql_error();
	
}
  //-----------------------------------------isset (btn save)  for undefined index notice--------

  
  
//==========================delete record============================


if(isset($_GET['id']))
{
			
	 if($epr=='delete')
	 {
		 
		$id=$_GET['id'];
		
		$delete=mysql_query("delete from profile where id=$id");
		if($delete)
			header ("location:admin.php"); 
		else 
			$msg='ERROR: '.mysql_error();

	}
	 //=========================update record============================
	elseif($epr=='saveup')
	{ 		
	$user=$_POST['txtuser'];
	$dob=$_POST['txtdob'];
	$gender=$_POST['txtgender'];
	$email=$_POST['txtemail'];
	$mobile=$_POST['txtmobile'];
	$state=$_POST['txtstate'];
	$city=$_POST['txtcity'];
	$pincode=$_POST['txtpin'];
	$lang = implode(',', $_POST['txtlanguage']);
	$id=$_GET['id'];
	
	$sql = "UPDATE profile SET user='$user', dob='$dob', gender='$gender', email='$email' , mobile='$mobile' , state='$state' , city='$city' , pincode='$pincode',language='$lang' WHERE id='$id' ";
	
	$a_sql=mysql_query($sql) ;
	
if($a_sql)
		header("location:admin.php");
	else 
		$msg=' ERROR:'.mysql_error();
	
}


}//--------------------------isset get id for undefined index id notice



?>

<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"> <!-- date picker-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!--date picker-->
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> <!--date picker-->
		
		 <script>      <!--date picker-->
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
	</head>
	
	
	<body class="container">
	<h1 align="center"> MANAGE USER'S INFORMATION  <h1>
	<div class="jumbotron">
	<?php  //---------------------php       if epr is update then show update students-------
	if($epr=='update'){
	 $id=$_GET['id'];
	 $row = mysql_query("select * from profile where id='$id'"); //--get row---
     $us_row = mysql_fetch_assoc($row); 
	?>
<h2 align="center">UPDATE STUDENTS</h2>
<form method ="POST" action='admin.php?epr=saveup&id=<?php echo $id; ?>'>
<table align="center">
<tr>
	<td>NAME:</td>
	<td><input type='text' name='txtuser' value="<?php echo $us_row['user']?>"></td>

</tr>
<tr>
	<td>DATE OF BIRTH:</td>
	<td><input id="datepicker" name='txtdob' value="<?php echo $us_row['dob']?>"></td>

</tr>
<tr>
	<td>GENDER:</td>
	<td> <input type="radio" name="txtgender" value="female" <?php echo ($us_row['gender']=='female')?'checked':'' ?> >Female
  <input type="radio" name="txtgender" value="male" <?php echo ($us_row['gender']=='male')?'checked':'' ?> >Male </td>

</tr>
<tr>
	<td>EMAIL:</td>
	<td><input type='text' name='txtemail' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Type a valid email" value="<?php echo $us_row['email']?>"></td>

</tr>
<tr>
	<td>MOBILE NUMBER:</td>
	<td><input type='text' name='txtmobile'  pattern="[0-9]{10}" title="Should be a 10 digit number" value="<?php echo $us_row['mobile']?>"></td>

</tr>
<tr>
	<td>STATE:</td>
	<td>
	<select name="txtstate" selected="<?php echo $us_row['state']; ?>" >
  <option value="dl">DELHI</option>
  <option value="jnk">JAMMU AND KASHMIR</option>
  <option value="hp">HIMACHAL PRADESH</option>
  <option value="hr">HARYANA</option>
  <option value="up">UTTAR PRADESH</option>
  <option value="mp">MADHYA PRADESH</option>
  <option value="br">BIHAR</option>
  <option value="ap">ANDRA PRADESH</option>
  <option value="gj">GUJRAT</option>
  <option value="mh">MAHARASHTRA</option>
  <option value="kr">KARNATAKA</option>
  <option value="pb">PUNJAB</option>
  <option value="pb">PUNJAB</option>
</select>
	 </td>

</tr>
<tr>
	<td>CITY:</td>
	<td><input type='text' name='txtcity' value="<?php echo $us_row['city']?>"></td>

</tr>
<tr>
	<td>PIN CODE:</td>
	<td><input type='text' name='txtpin' pattern="[0-9]{6}" title="Should be a 6 digit number"  value="<?php echo $us_row['pincode']?>"></td>

</tr>

<tr>
	<td>LANGUAGE:</td>
	<td><select name="txtlanguage[]" multiple>
	<option value="hindi" <?php echo ($us_row['language']=='hindi')?'selected':'' ?>>HINDI</option>
	<option value="eng" <?php echo ($us_row['language']=='eng')?'selected':'' ?>>ENGLISH</option>
  <option value="pun" <?php echo ($us_row['language']=='pun')?'selected':'' ?>>PUNJABI</option>
  <option value="ger" <?php echo ($us_row['language']=='ger')?'selected':'' ?>>GERMAN</option>
</select></td>

</tr>
<tr>
	<td></td>
	<td><input type='submit' name='btnsave'></td>

</tr>
</table>

</form>
	

	
	<?php }else{ ?> <!--------- php continue   if not epr = update  then show add new profile--------->
<h2 align="center"> ADD NEW PROFILE</h2>
<form method="POST" action='admin.php?epr=save'>
<table align="center">
<tr>
<td>NAME: </td>
<td><input type='text' name='txtuser'></td>
</tr>
<tr>
<td>DATE OF BIRTH: </td>
<td><input id="datepicker" name='txtdob'></td>
</tr>
<tr>
<td>GENDER: </td>
<td>    <input type="radio" name="txtgender" value="female">Female
  <input type="radio" name="txtgender" value="male">Male </td>
</tr>
<tr>
<td>EMAIL: </td>
<td> <input type="text" name="txtemail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Type a valid email"/>  </td>
</tr>
<tr>
<td>MOBILE NO.: </td>
<td> <input type="text" name="txtmobile" pattern="[0-9]{10}" title="Should be a 10 digit number"> </td>
</tr>
<tr>
<td>STATE: </td>
<td> <select name="txtstate">
  <option value="dl">DELHI</option>
  <option value="jnk">JAMMU AND KASHMIR</option>
  <option value="hp">HIMACHAL PRADESH</option>
  <option value="hr">HARYANA</option>
  <option value="up">UTTAR PRADESH</option>
  <option value="mp">MADHYA PRADESH</option>
  <option value="br">BIHAR</option>
  <option value="ap">ANDRA PRADESH</option>
  <option value="gj">GUJRAT</option>
  <option value="mh">MAHARASHTRA</option>
  <option value="kr">KARNATAKA</option>
  <option value="pb">PUNJAB</option>
  <option value="pb">PUNJAB</option>
</select> </td>
</tr>
<tr>
<td>CITY: </td>
<td><input type='text' name='txtcity'></td>
</tr>
<tr>
<td>PIN CODE: </td>
<td><input type="text" name="txtpin" pattern="[0-9]{6}" title="Should be a 6 digit number"></td>
</tr>
<tr>
<td>LANGUAGE: </td>
<td><select name="txtlanguage[]" multiple>
  <option value="hindi">HINDI</option>
  <option value="eng" >ENGLISH</option>
  <option value="pun">PUNJABI</option>
  <option value="ger">GERMAN</option>
</select></td>
</tr>
<tr>
<td> </td>
<td><input type='submit' name='btnsave'></td>
</tr>

</table>

</form>
	
	<?php } ?> <!------------- php  continue------------>
	
</div>	
	<!--------------------------------------show data---------------------------------------------------------->
	<h2 align="center"> USER'S LIST<h2>
<table align="center" border="1" cellspacing="0" cellpadding="0" width="1000">
	<thead>
		<th>S.no.</th>
		<th>Name</th>
		<th>Date Of Birth</th>
		<th>Gender</th>
		<th>Email</th>
		<th>Mobile no.</th>
		<th>State</th>
		<th>City</th>
		<th>Pin Code</th>
		<th>Language</th>
		<th>Action</th>

	</thead>
	<?php
	
	$i=1;
	while($row=mysql_fetch_array($sql)){ //-------------fetching row
		echo" <tr>
		<td>".$i."</td>
		<td>".$row['user']."</td>
		<td>".$row['dob']."</td>
		<td>".$row['gender']."</td>
		<td>".$row['email']."</td>
		<td>".$row['mobile']."</td>
		<td>".$row['state']."</td>
		<td>".$row['city']."</td>
		<td>".$row['pincode']."</td>
		<td>".$row['language']."</td>
		<td> <a href='admin.php?epr=update&id=".$row['id']."'>UPDATE</a> 
		<a href='admin.php?epr=delete&id=".$row['id']."'>DELETE</a>  
				  </td>
		</tr>";
		$i++; 

		}

	?>
</table>
<?php echo $msg;?>
	</body>
</html>