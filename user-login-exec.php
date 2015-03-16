<?php
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server

	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$email = clean($_POST['email']);
	$password = md5($_POST['password']);
	
	//Input Validations
	if($email == '') {
		$errmsg_arr[] = 'email ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location:login.php?email or password missing");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM cipltech_customer WHERE cust_email='$email' AND cust_password='$password' ";
	$result=mysql_query($qry);



	
	//Check whether the query was successful or not
	if($result) { 
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			
			session_regenerate_id();
			$cipltech_customer = mysql_fetch_assoc($result);
			if(($cipltech_customer['cust_status'])== 0)
			{
				header("location:pre-login.php?Not Activatedyet");
				//echo $cipltech_customer['cust_status'];
			}
			else{


			$_SESSION['SESS_FIRST_NAME'] = $cipltech_customer['cust_fname'];
			$_SESSION['SESS_LAST_NAME'] = $cipltech_customer['cust_lname'];
			$_SESSION['SESS_U_ID'] = $cipltech_customer['cust_id'];
			$_SESSION['SESS_EMAIL']=$cipltech_customer['cust_email'];
			$_SESSION['SESS_COURSE']=$cipltech_customer['course'];
			$_SESSION['SESS_MOCK']=$cipltech_customer['mock'];
			$_SESSION['SESS_SUBJECT']=$cipltech_customer['subject_wise'];
			session_write_close();
			header("location:myacc.php?LoggedIn");
			}

			
			
		}else {
			//Login failed
			header("location:login.php?wrong email or password");
			//echo "wrong email or password";
			exit();
		}
	}else {
		die("Query failed");
	}
?>