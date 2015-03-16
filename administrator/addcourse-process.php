<?php
include("includes/config.php");
if(!isset($_SESSION['adminuser']))
{
?>

<?php

$course_name=$_POST['course_name'];
$course_description=$_POST['course_desc'];
$metatitle=$_POST['meta_title'];
$meta_keyword=$_POST['meta_keyword'];
$meta_description=$_POST['meta_desc'];
$status=$_POST['status'];

$query="INSERT INTO quiz_course (course_name,course_description,meta_title,meta_keyword,meta_desc,course_status) VALUES ('$course_name','$course_description', '$metatitle','$meta_keyword','$meta_description','$status')";
mysql_query($query);
 @header("location:./addcourse.php?added");
?>
