<?php
require 'config.php';
@session_start();
if (($_SESSION['SESS_MOCK'])<1 AND ($_SESSION['SESS_TYPE_TEST'])=="mock" ) {

	echo "<br><br><br><b><label  style='display:block;margin-left:350px;'><u>Your Mock Test Subscription has expired Kindly Contact Administrator (nishant_cs@hotmail.com).</u></label><br>";
}
else{

if (($_SESSION['SESS_MOCK'])<1 AND ($_SESSION['SESS_TYPE_TEST'])=="subject" ) {
	echo "<br><br><br><b><label  style='display:block;margin-left:350px;'><u>Your Subject Wise Test Subscription has expired Kindly Contact Administrator (nishant_cs@hotmail.com).</u></label><br>";
}
else
{

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
	$score=$correctAns;
	$totalmarks=$correctAns+$wrong+$NoAnswer;

	echo "<b><label  style='display:block;margin-left:400px;'><u>RESULT</u></label></b><br><br>


		<form action='./sendresulttomail.php' method='post'>
	";
	

	

	echo "<label  style='display:block;margin-left:400px;'>Correct Answer:";
	echo $correctAns; echo"</label></br>";
	echo "<label  style='display:block;margin-left:400px;'>Wrong Answer: ";
	echo $wrong ; echo"</label></br>";
	echo "<label  style='display:block;margin-left:400px;'>No Answer: ";
	echo $NoAnswer; echo "</label></br>";
	echo "<label  style='display:block;margin-left:400px;'><br>Score:"; 
	echo $score; echo " out of "; echo $totalmarks; echo " Marks</label>";
	echo "<label  style='display:block;margin-left:400px;'><br>Do you Want to send Result to :<input type='text' value= '";
	echo $email;
	echo "'></label></br></br>


		<input type='text' name='correctans' value='".$correctAns."' style='display:none;'>
		<input type='text' name='wrongans' value='".$wrong."' style='display:none;'>
		<input type='text' name='noans'  value='".$NoAnswer."' style='display:none;'>
		<input type='text' name='totalmarks' value='".$totalmarks."' style='display:none;'>
		



<label  style='display:block;margin-left:600px;'><input type='submit' value='send' class='submit-test-btn'></label></br>
</form>
<label  style='display:block;margin-left:400px;'><a href='./index.php' class='submit-test-btn'>Go to Home</a> <a href='./quiz-selector.php' class='submit-test-btn'>Take Test Again</a></label> 
</br>";

	
	$category_id=1;


	//insert result in Database

	
	$query="INSERT INTO users (user_name,email,score,wrong_ans,total_marks,category_id) values('$user_name','$email','$score','$wrong','$totalmarks','$category_id')";
	$result=mysql_query($query);
	unset($_SESSION['SESS_COURSE_TEST']);
	//unset($_SESSION['SESS_TYPE_TEST']);
	//unset($_SESSION['SESS_SUBJECT_TEST']);
	unset($_SESSION['SESS_MARKS_TEST']);
	unset($_SESSION['yo']);

}
else{
	@session_start();
	echo "No Result Found";
	//echo $_SESSION['SESS_FIRST_NAME'];
}


}

}
?>