<?php
include_once ("./config.php");
$slno=$_GET['svalue'];
 $query1="select * from download WHERE slno='$slno' ";
      $result1=mysql_query($query1);
      $row1=mysql_fetch_array($result1);
      $downloaded=$row1[12];
   $updated=$downloaded+1;
   $query=mysql_query("UPDATE download SET countdownloaded='$updated' WHERE slno='$slno' ");

 
   echo $updated;


                                                  
?>