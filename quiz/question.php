<?php
 
//define('BASE_PATH','http://seosmoppc.co.in/csattack');
require 'config.php';
$response=[];
if(isset($_GET['course_id'])){
	try{
		@session_start();
		

		
		if($_SESSION['SESS_TYPE_TEST']=="mock"){
			$crs=$_SESSION['SESS_COURSE_TEST'];

			$query="select * from quiz_question where quiz_course_id='$crs' LIMIT 60";
			
			}
			else
			{	
				$marks=$_SESSION['SESS_MARKS_TEST'];
				$sessions = "'" . implode("', '",$_SESSION['yo']) . "'";
				//echo $sessions;
				
				$query="select * from quiz_question WHERE examination_year IN ($sessions) LIMIT ". (int)$marks;
				unset($_SESSION['yo']);
			}

		
		$result=mysql_query($query);
		while($row=mysql_fetch_array($result)){
			array_push($response, [
				'id' => $row['quiz_id'],
				'question' => $row['quiz_qust'],
				'options' => array( $row['quiz_ans1'], $row['quiz_ans2'], $row['quiz_ans3'], $row['quiz_ans4']),
				'tick' => ''
			]);
		}
	}
	catch(Exception $e) {
		$response=[];
	}
}
	$someJSON = json_encode($response);
	echo $someJSON;


?>
