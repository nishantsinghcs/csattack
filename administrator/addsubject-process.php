<?php
include("includes/config.php");
if(!isset($_SESSION['adminuser']))
{
?>


<div style="background:#009900;width:250px;padding:10px;">Subject Added Successfully<img src="./img/tick.png" style="margin-left:20px;height:14px;widht:17px;"></div>
<?php
$course_name=$_POST['course'];
$subject_name=$_POST['subject_name'];
//$course_id=$_POST['course_id'];
$query="select * from quiz_course WHERE course_name='$course_name'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
//$course_name=$row[2];
$course_id=$row[0];

  //echo $course_id;
 // echo "hello";                                  
$query="INSERT INTO quiz_subject_name(course_id,subject_name,course_name) VALUES ('$course_id','$subject_name', '$course_name')";
mysql_query($query);
 @header("location:./addsubject.php?added");
?>

 