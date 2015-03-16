
<?php
mail($email,$subject,$message,$headers);



	$email=mysql_real_escape_string($_POST['email']);
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Additional headers
	$headers .= 'From: Technical Support<technicalsupport@instaitsupport.com>' . "\r\n";
	$headers .= 'Cc: hr@instaitsupport.com';
	
	
	//$from = "Technical Support<technicalsupport@instaitsupport.com>"; // sender
	$subject = "Welcome to Insta Technical Support";
	$message = "Dear <b>$name</b> <br>
Welcome to Insta Technical Support. Your registered phone number is <b> $contact </b>. 
You will get a verification cum satisfaction call in 1-2 workings days. You are now subscribed to our technical services. 
You can now drop unlimited mails to us <b>technicalsupport@instaitsupport.com</b> 
anytime to get premium support with our certified technician who will be calling you back in few hours or on your preffered 
time if you donot get a callback withing 24 hours you can file a complain against your assigned technician by droping a mail
 to Administration team at <b> complain@instaitsupport.com</b>. Also you can call us directly on our Toll free number
  <b>1-844-208-5170</b> (In non working hours you may leave a <b>voice mail</b>.). 
	<br><br>
	Thanking you . 
	<br>   <br>                                                                                                                            
	<b>Team Insta</b><br>
	<b>1-844-208-5170</b>
	 ";
	// message lines should not exceed 70 characters (PHP rule), so wrap it
	$message = wordwrap($message, 70);

	?>