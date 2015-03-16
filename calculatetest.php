<?php
require 'config.php';
@session_start();
if (($_SESSION['SESS_MOCK'])<1 AND ($_SESSION['SESS_TYPE_TEST'])=="mock" ) {

	echo "<br><br><br><b><label  style='display:block;margin-left:350px;'><u>Your Mock Test Subscription has expired Kindly Contact Administrator. </u></label><br>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Additional headers
$headers .= 'From: CS QUIZ RESULT<info@seosmoppc.co.in>' . "\r\n";
$headers .= 'Cc: nishant_cs@hotmail.com';
$subject = "Expired Accounts";
$email2='nishant_cs@hotmail.com';
$email1=$_SESSION['SESS_EMAIL'];
$message=" $email1's MOCK TEST Subscription has expired.";
$message = wordwrap($message, 70);
mail($email2,$subject,$message,$headers);

}
else{

if (($_SESSION['SESS_MOCK'])<1 AND ($_SESSION['SESS_TYPE_TEST'])=="subject" ) {
	echo "<br><br><br><b><label  style='display:block;margin-left:350px;'><u>Your Subject Wise Test Subscription has expired Kindly Contact Administrator.</u></label><br>";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Additional headers
$headers .= 'From: CS QUIZ RESULT<info@seosmoppc.co.in>' . "\r\n";
$headers .= 'Cc: nishant_cs@hotmail.com';
$subject = "Expired Accounts";
$email2='nishant_cs@hotmail.com';
$email1=$_SESSION['SESS_EMAIL'];
$message=" $email1's SUBJECT WISE Subscription has expired.";
$message = wordwrap($message, 70);
mail($email2,$subject,$message,$headers);

}
else
{
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Additional headers
$headers .= 'From: CS QUIZ RESULT<info@seosmoppc.co.in>' . "\r\n";
$headers .= 'Cc: nishant_cs@hotmail.com';
$subject = "Active User";
$email2='nishant_cs@hotmail.com';
$email1=$_SESSION['SESS_EMAIL'];
$message=" $email1 has sucessfully completed test. ";
$message = wordwrap($message, 70);
mail($email2,$subject,$message,$headers);

if(isset($_POST['json'])){
	try{
		$decoded = json_decode(urldecode($_POST['json']), true);
		$correctAns=0;
		$wrong=0;
		$NoAnswer=0;
		$query="select * from quiz_question";
		$result=mysql_query($query);
		while($row=mysql_fetch_array($result)){
			for($i=0;$i<count($decoded);$i++){
				
					if((int)$decoded[$i]['id']==$row['quiz_id']){
						if($decoded[$i]['tick']!==''){
							if((int)$decoded[$i]['tick']==$row['corr_answer']){
								$correctAns++;
							}
							else{
								$wrong++;
							}
						}
						else{
							$NoAnswer++;
						}
						break;
					}
				
			}
		}
	}
	catch(Exception $e) {
		echo "Error Occured";
	}
// update to database to reduce count of test
@session_start();
	if($_SESSION['SESS_TYPE_TEST']=="mock"){
	$sub_wise=$_SESSION['SESS_MOCK'];
	$newsub=$sub_wise-1;
	$cust_i=$_SESSION['SESS_U_ID'];
	$qrey="UPDATE  cipltech_customer SET  mock ='$newsub' WHERE  cust_id='$cust_i'";
	mysql_query($qrey);

	$_SESSION['SESS_MOCK']=$newsub;
	
}
else
{
	
	
	$sub_wise=$_SESSION['SESS_SUBJECT'];
	$newsub=$sub_wise-1;
	$cust_i=$_SESSION['SESS_U_ID'];
	$qrey="UPDATE  cipltech_customer SET  subject_wise ='$newsub' WHERE  cust_id='$cust_i'";
	mysql_query($qrey);

	$_SESSION['SESS_SUBJECT']=$newsub;
}






	@session_start();
	//$id=$_SESSION['SESS_U_ID'];
	$user_name=$_SESSION['SESS_FIRST_NAME'];
	$email=$_SESSION['SESS_EMAIL'];
	
if($_SESSION['SESS_POSITIVENEGATIVE_TEST']==1)
{
	$score=2*($correctAns-$wrong);
	$totalmarks=2*($correctAns+$wrong+$NoAnswer);
	$percentage=($score/$totalmarks)*100;
}
else{
	$score=2*($correctAns);
	$totalmarks=2*($correctAns+$wrong+$NoAnswer);
	$percentage=($score/$totalmarks)*100;
}

echo "<div style='display:block;border-radius:5px;background: url(./img/calb.png); background-size: 600px 700px;background-position: center top; 
    background-repeat: no-repeat;' name='rslt'> <br> <br> <br> <br> <br>";

	if($percentage>33){
		echo "<img src='./img/pass.png' style='float:right;margin-right:200px;margin-top:100px'><br><br>";
		echo "<div style='float:right;margin-right:150px;'>
		<h4>Very Nice "; echo $_SESSION['SESS_FIRST_NAME']; echo" !! </h4>
		</div>";
		echo "<label  style='display:block;margin-left:550px;'><h3>Result: <i>Pass</i></h3></label>";
	}
	else
	{
		echo "<img src='./img/fail.jpg' style='float:right;margin-right:200px;margin-top:100px'><br><br>";
		echo "<div style='float:right;margin-right:150px;'>
		<h4>Very Poor Performance "; echo $_SESSION['SESS_FIRST_NAME']; echo" !! </h4>
		</div>";
		echo "<label  style='display:block;margin-left:550px;'><h3>Result: <i>Fail</i></h3></label>";
	}

	echo "<br>


		<form action='./sendresulttomail.php' method='post'>
	";
	echo "<label  style='display:block;margin-left:500px;'><b>Subject Name:</b> ";

	echo $_SESSION['SESS_SUBJECT_TEST']; echo"</label></br>";
if($_SESSION['SESS_TYPE_TEST']=="mock"){
	echo "<label  style='display:block;margin-left:500px;'><b>Chapters Included:</b> ";
		$sessions = "'" . implode("', '",$_SESSION['SESS_SUBCHAPTER']) . "'";
		echo "<i>".$sessions."</i>";
	}
	else
	{
		echo "<label  style='display:block;margin-left:500px;'><b>Chapters Included:</b> ";
		$sessions = "'" . implode("', '",$_SESSION['yo']) . "'";
		echo "<i>".$sessions."</i>";
	}
	 echo"</label></br>";

	echo "<label  style='display:block;margin-left:500px;'><b>Correct Answer:</b> ";
	echo $correctAns; echo"</label></br>";
	echo "<label  style='display:block;margin-left:500px;'><b>Wrong Answer:</b> ";
	echo $wrong ; echo"</label></br>";
	echo "<label  style='display:block;margin-left:500px;'><b>No Answer: </b>";
	echo $NoAnswer; echo "</label></br>";
	echo "<label  style='display:block;margin-left:500px;'><br><b>Score:</b> "; 
	echo $score; echo " out of "; echo $totalmarks; echo " Marks</label>";
	echo "<label  style='display:block;margin-left:500px;'><b>Percentage:</b>  ";
	echo $percentage; echo "%</label></br>";
	echo "<label  style='display:block;margin-left:450px;'><br><i>Do you Want to send Result to :</i><input type='text' value= '";
	echo $email;
	echo "'></label></br></br>


		<input type='text' name='correctans' value='".$correctAns."' style='display:none;'>
		<input type='text' name='wrongans' value='".$wrong."' style='display:none;'>
		<input type='text' name='noans'  value='".$NoAnswer."' style='display:none;'>
		<input type='text' name='totalmarks' value='".$totalmarks."' style='display:none;'>
		



<label  style='display:block;margin-left:600px;'><input type='submit' value='send' class='submit-test-btn'></label></br>
</form>
<label  style='display:block;margin-left:400px;'>
<a href='./quiz-selector.php' class='submit-test-btn'>Take More Tests </a>
<a href='#' class='submit-test-btn' onclick='Reviewtest();' style='margin-left:199px;'>Review Your Paper</a>
</label> 
</div>


<label  style='display:block;margin-left:400px;'>
<a href='./index.php' class='submit-test-btn'>EXIT</a>
</label> 

</div>";


	
	$category_id=1;


	//insert result in Database

	
	$query="INSERT INTO users (user_name,email,score,wrong_ans,total_marks,category_id) values('$user_name','$email','$score','$wrong','$totalmarks','$category_id')";
	$result=mysql_query($query);
	//unset($_SESSION['SESS_COURSE_TEST']);
	//unset($_SESSION['SESS_TYPE_TEST']);
	//unset($_SESSION['SESS_SUBJECT_TEST']);
	//unset($_SESSION['SESS_MARKS_TEST']);
	//unset($_SESSION['yo']);
	//unset($_SESSION['SESS_SUBCHAPTER']);
	//unset($_SESSION['SESS_POSITIVENEGATIVE_TEST']);

}
else{
	@session_start();
	echo "No Result Found";
	//echo $_SESSION['SESS_FIRST_NAME'];
	
}


}

}
?>
