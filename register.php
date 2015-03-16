<?php
	
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	

	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$course=clean($_POST['course_id']);
	$fname = clean($_POST['fname']);
	$lname = clean($_POST['lname']);
	$email = clean($_POST['email']);
	$gender = clean($_POST['gender']);
	$profession = clean($_POST['usertype']);
	$institute = clean($_POST['institute']);
	$branch = clean($_POST['branch']);
	$dob = clean($_POST['dob']);
	$number = clean($_POST['number']);
	$address = clean($_POST['address']);
	$city = clean($_POST['city']);
	$state = clean($_POST['state']);
	$country = clean($_POST['country']);
	$password = clean($_POST['password']);
	$offset=strtotime("+30 minutes , +12 hours");
	$time=date('H:i a', $offset);
	$date=date("D M Y",$offset);
	$mock=10;
	$subject_wise=50;
	$image="./img/clients/dummy.png";
	$about_me="Click to add something about you.";

	//Check for duplicate Email ID
	if($email != '') {
		$qry = "SELECT * FROM cipltech_customer WHERE cust_email='$email'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'Email ID already in use';
				$errflag = true;

			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();

		header("location: signin.php?Already Registered Email");
		exit();
	}


	//Create INSERT query
	$qry = "INSERT INTO cipltech_customer(image,about_me,cust_fname,cust_lname,cust_email,gender,cust_password,cust_contact,cust_profession,cust_institute,cust_branch,cust_address,cust_state,cust_city,cust_country,cust_reg_on,course,mock,subject_wise) 
	VALUES('$image','$about_me','$fname','$lname','$email','$gender','".md5($_POST['password'])."','$number','$profession','$institute','$branch','$address','$state','$city','$country','$date','$course','$mock','$subject_wise')";
	$result = mysql_query($qry);
		
	//Check whether the query was successful or not
	if($result) {
	//login the user here
	//Create query
	
	
//send mail for activation


//create activation link 

	 $query1="select * from cipltech_customer where cust_email='$email'";
     $result1=mysql_query($query1);
      $row1=mysql_fetch_array($result1);
      $actid=$row1[0];
   //   echo $actid;



	$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Additional headers
$headers .= 'From: CS Attack<info@seosmoppc.co.in>' . "\r\n";
$headers .= 'Cc: nishant_cs@hotmail.com';
$subject = "CS Attack Activation";
$message = " <b>  Hello $fname ,<br>
<br><br><br><br>
Welcome to Cs attack, Best online education site.<br >For activating your Account. Click below link.<br><br>
<a href='http://seosmoppc.co.in/csattack/activate.php?id=$actid'>Activate</a>  <br><br>
Or copy this code to url 
<br><br>
http://seosmoppc.co.in/csattack/activate.php?id=$actid    
<br><br><br><br>
Thanks <br><br>
CS Attack


 ";


$message = wordwrap($message, 70);
mail($email,$subject,$message,$headers);




	
	//redirect to home page
		header("location: pre-login.php?newregistered");
		exit();

	}
	else{
		echo "query failed to register";
	}
?>



<!-- mail module 
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Additional headers
	$headers .= 'From: CS Attack Exam <info@seosmoppc.co.in/>' . "\r\n";
	$headers .= 'Cc: nishant_cs@hotmail.com';
	
	
	//$from = "Technical Support<technicalsupport@instaitsupport.com>"; // sender
	$subject = "CS Attack online Exam account activation";
	$message = "Dear <b>$fname</b> <br>
Welcome to cs attack online exam. Your have registered with us for <b> CS Foundation </b>.Quiz Course  
you can take taste after clicking the below link.
<br><br>
<a href='http://seosmoppc.co.in/activate.php?$email;> Activate Your Account</a>
	Thanking you . 
	<br>   <br>                                                                                                                            
	<b>CS Attack</b><br>
	
	 ";
	// message lines should not exceed 70 characters (PHP rule), so wrap it
	$message = wordwrap($message, 70);


mail($email,$subject,$message,$headers);





	-->