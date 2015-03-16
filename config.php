<?php

ob_start();
session_start();

$DB_HOST	="localhost";

$DB_USER        ='root';

$DB_PASSWORD    ='';

$DB_DATABASE    ='test';

	

$conn = mysql_connect($DB_HOST,$DB_USER,$DB_PASSWORD) or mysql_error();

mysql_select_db($DB_DATABASE, $conn) or die("I cannot  find the database.");




