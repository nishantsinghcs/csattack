<?php
							include_once ('./config.php');
							$selectvalue = $_GET['svalue'];
       					 $query="select * from quiz_subject_name where course_name='$selectvalue' ";
  							$result=mysql_query($query);
  							while($row=mysql_fetch_array($result)){
   							echo "<option value='";echo $row[1];echo"'>";echo $row[1];echo "</option>";
  						 }
 ?>

				
 
