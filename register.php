<?php ini_set('mysql.connect_timeout',300);
	ini_set('default_sockrt_timeout',300);
	?>


<!DOCTYPE html>
<html>

<head>
 <title> REGISTRATION PAGE </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"> <!-- date picker-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  <!--date picker-->
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> <!--date picker-->
  
		<script> <!--datepicker-->
		$(document).ready(function() {
			$("#datepicker").datepicker();
		});

  function checkForm(form)   <!-- for password checking and username -->
  {
    if(form.user.value == "") {
      alert("Error: Username cannot be blank!");
      form.user.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.user.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.user.focus();
      return false;
    }

    if(form.pass.value != "" && form.pass.value == form.cpass.value) {
      if(form.pass.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pass.focus();
        return false;
      }
      if(form.pass.value == form.username.value) {
        alert("Error: Password must be different from Username!");
        form.pass.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pass.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pass.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pass.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.pass.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pass.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.pass.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pass.focus();
      return false;
    }

    alert("You entered a valid password: " + form.pass.value);
    return true;
  }

</script>
		
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!--bootstrap-->
</head>

<body>
<div class="container" >
<form method="post" action="validate.php" enctype="multipart/form-data" onsubmit="return checkForm(this);"> <!--onsubmit to run javascript alongwith form filling-->
<div class="jumbotron"><h1 align="center">REGISTRATION PAGE</h1><br><hr>

<div  class="jumbotron" style="padding: 25px 50px 75px 350px;">
USERNAME:
<input type="text" name="user" required/> <br><br>
DATE OF BIRTH:
<input id="datepicker" name="dob" required/><br><br>
  GENDER:
  <input type="radio" name="gender" value="female" required>Female
  <input type="radio" name="gender" value="male" required>Male<br><br>
 EMAIL:
<input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Type a valid email" required/> <br><br>
MOBILE NUMBER: 
<input type="text" name="mobile" pattern="[0-9]{10}" title="Should be a 10 digit number" required><br><br>
STATE:
<select name="state">
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
</select> <br><br>
CITY:
<input type="text" name="city" required/> <br><br>
PIN CODE: 
<input type="text" name="pincode" pattern="[0-9]{6}" title="Should be a 6 digit number" required><br><br>
LANGUAGES KNOWN: <!-- LIST OF -->
<select name="language[]" multiple>
  <option value="hindi">HINDI</option>
  <option value="eng">ENGLISH</option>
  <option value="pun">PUNJABI</option>
  <option value="ger">GERMAN</option>
</select> <br><br>

PASSWORD: <!--  AJAX-->
<input type="password" name="pass" /> <br><br>
CONFIRM PASSWORD: <!-- LIST OF -->
<input type="password" name="cpass" /> <br><br>
  

 <!--specific enctype fpr file uploads-->
    Select image to upload:<br>
    <input type="file" name="image"  required></div>
	<div align="center"><input type="submit" value="Submit" name="submit"/><br><br></div>
    
</form>
</div></div></div>

</body>
</html>

