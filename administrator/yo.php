	<?php
	include_once "./includes/config.php";
	$sql = mysql_query("UPDATE download SET status = 0 where slno = 26");
	echo "done";

?>