<?php
include("includes/config.php");
if(!isset($_SESSION['adminuser']))
{
?>

<?php
$subject_name=$_POST['subject'];
$chapter_name=$_POST['chapter_name'];
//$course_id=$_POST['course_id'];
$query="select * from quiz_subject_name WHERE subject_name='$subject_name'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$course_name=$row[2];
$course_id=$row[0];

  //echo $course_name;
 // echo "hello";                                  
$query="INSERT INTO quiz_chapter_name(course_id,chapter_name,course_name,subject_name) VALUES ('$course_id','$chapter_name', '$course_name','$subject_name')";
mysql_query($query);
 @header("location:./addchapter.php?added");
?>
