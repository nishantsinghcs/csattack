<?php
if (isset($_GET["id"])) {
  $id=$_GET["id"];



$qry="UPDATE  `test`.`cipltech_customer` SET  `cust_status` =  '1' WHERE  `cipltech_customer`.`cust_id` ='$id'";
mysql_query($qry);

header("location:new-login.php?Activated");

}

?>