


<?php


	

if(isset($_POST['submit']) && isset($_FILES['image'])){ //'image' is the name of input type file
{
	$user=$dob=$gender=$mobile=$state =$city =$pin= $cpass= $pass=$email="";
	$image=$language="";

	

	$user = $_POST['user'];
	$email = $_POST['email'];
	$pass =$_POST['pass'];
	$cpass =$_POST['cpass'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$mobile=$_POST['mobile'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$pin=$_POST['pincode'];
	$language=$_POST['language'];

	//var_dump($language);
	
	// for image proccessing
	$file=$_FILES['image'];
	
	
	$name= $_FILES['image']['name']; //this
	$type= $file['type']; //and this is the same thing
	$tmp= $_FILES['image']['tmp_name'];
	$error= $_FILES['image']['error'];
	$size= $_FILES['image']['size'];
	// know the file extension
	$file_ext = explode('.',$name); // explode(separator,string,limit) ; this function breaks the string into an array

	$file_ext = strtolower( end($file_ext)); // it will take the end element of the array i.e. 'txt' and change it to lowercase 
	
	
	//for any specific file type
	$allowed = array('jpg','jpeg','png');
	if(getimagesize($_FILES["image"]["tmp_name"])!== false){ //You could use getimagesize() which returns zeros for size on non-images.
		
	if(in_array($file_ext, $allowed)){//this function take a value and see if its an array, in this case its checking if the $file_ext is inside the $allowed arrar
	if($error===0){ // check if no error
		if($size<=92097152){  // if no error ,check the size
			$name_new = $user.'.'.$file_ext;	//if size is good, give a new name with unique id so thatit couldnt overwright other files 
			$file_destination='uploads/'.$name_new;  // new var for file destination
			
			
			if(move_uploaded_file($tmp,$file_destination)){ $file_destination;}  // to move the uploaded file to the specified directory
			
			}
		}
	}
}	else { echo "<br>please choose an image file<br>";}
	
	
	
/////-----------------------------------------------------------		

		
	
			if($pass==$cpass)
			{ // for pass varification

					include 'connect.php';
					
					mysql_select_db("my_db",$con); // selecting dabase to work with
					 $aoi = implode(',', $_POST['language']); //---------------new
					$md5pass=md5($pass);
				  $query = "INSERT INTO profile(user, dob, gender, email , mobile , state , city , pincode ,language, password) VALUES('$_POST[user]', '$_POST[dob]', '$_POST[gender]' ,'$_POST[email]', '$_POST[mobile]' , '$_POST[state]' , '$_POST[city]' , '$_POST[pincode]', '$aoi','$md5pass')";    
					
			//		if (mysql_query( $query, $con)) {  // ======TO RETURN THE ID OF THE LAST QUERY-----------
				//	$last_id = mysql_insert_id($con);
				//	"New record created successfully. Last inserted ID is: " . $last_id;
				//	} else {
				//	echo "Error: " . $query . "<br>" . mysql_error($con);
				//	}

				 
			//	$a= $_POST['language']['0'] ;
				//$b= $_POST['language']['1'] ;
				//$c= $_POST['language']['2'] ;
				//$d= $_POST['language']['3'] ;
				
				
				//	echo $querylang="INSERT INTO language SET id='".$last_id."' , 1='".$a."' , 2='".$b."' , 3='".$c."', 4='".$d."' ";
					
					
					mysql_query($query,$con); 
			//	$pp=	mysql_query($querylang,$con);
			//		if(!$pp){ echo "error in sql query :" . mysql_error();}

					
					
					include 'profile.php';
				}
						
		
		else 
		{ 
			echo "<br>YOUR PASSWORDS DONT MATCH!!! <br>";
		}
}	
}
?>