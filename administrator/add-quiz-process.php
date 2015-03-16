<?php
include("includes/config.php");
if(!isset($_SESSION['adminuser']))
{
?>

<?php
$year=$_POST['exm_year'];

 $query1="select * from quiz_chapter_name where chapter_name='$year'";
     $result1=mysql_query($query1);
      $row1=mysql_fetch_array($result1);
$course_id=$row1[0];
$question=$_POST['question'];
$a1=$_POST['Ans1'];
$a2=$_POST['Ans2'];
$a3=$_POST['Ans3'];
$a4=$_POST['Ans4'];
$correct=$_POST['corrcAns'];
$status=$_POST['status'];


$query="INSERT INTO quiz_question (quiz_course_id,quiz_qust,quiz_ans1,quiz_ans2,quiz_ans3,quiz_ans4,corr_answer,examination_year,status) VALUES ('$course_id','$question', '$a1','$a2','$a3','$a4','$correct','$year','$status')";
mysql_query($query);
@header("location:addquiz.php?added=1");
?>

