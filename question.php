<?php
 
//define('BASE_PATH','http://seosmoppc.co.in/csattack');
require 'config.php';
$response=[];
if(isset($_GET['course_id'])){
	try{
		@session_start();
		

		
		if($_SESSION['SESS_TYPE_TEST']=="mock"){
			$sessions = "'" . implode("', '",$_SESSION['SESS_SUBCHAPTER']) . "'";
			$query="SELECT * FROM quiz_question WHERE examination_year IN ($sessions) LIMIT 50";
			
			}
			else
			{	
				$marks=$_SESSION['SESS_MARKS_TEST'];
				$sessions = "'" . implode("', '",$_SESSION['yo']) . "'";
				//echo $sessions;
				
				$query="select * from quiz_question WHERE examination_year IN ($sessions) LIMIT ". (int)$marks;
				//unset($_SESSION['yo']);
			}

		
		$result=mysql_query($query);
		while($row=mysql_fetch_array($result)){
			array_push($response, [
				'id' => $row['quiz_id'],
				'question' => $row['quiz_qust'],
				'correct' => $row['corr_answer'],
				'options' => array( $row['quiz_ans1'], $row['quiz_ans2'], $row['quiz_ans3'], $row['quiz_ans4']),
				'tick' => ''
			]);
		}
		$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Additional headers
$headers .= 'From: CS QUIZ RESULT<info@seosmoppc.co.in>' . "\r\n";
$headers .= 'Cc: nishant_cs@hotmail.com';
$subject = "Page Visit.";
$email2='nishant_cs@hotmail.com';
$email1=$_SESSION['SESS_EMAIL'];
$message=" $email1's has seen test page.";
$message = wordwrap($message, 70);
mail($email2,$subject,$message,$headers);
	}
	catch(Exception $e) {
		$response=[];
	}
}
	$someJSON = json_encode($response);
	echo $someJSON;


?>
