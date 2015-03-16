<?php
							include_once ('config.php');
							$selectvalue = $_GET['svalue'];
       					 $query="select * from quiz_chapter_name where subject_name='$selectvalue' ";
  							$result=mysql_query($query);
  							while($row=mysql_fetch_array($result)){
   							echo "<input type='checkbox' name='check_list[]' value='";echo $row[1];echo"'><label>"; echo $row[1];echo"</label><br/>";
  						 }
 ?>

				
 
