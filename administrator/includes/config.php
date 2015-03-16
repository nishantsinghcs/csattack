<?php

ob_start();
session_start();

$DB_HOST	="localhost";

$DB_USER        ='root';

$DB_PASSWORD    ='';

$DB_DATABASE    ='test';

	

$conn = mysql_connect($DB_HOST,$DB_USER,$DB_PASSWORD) or mysql_error();

mysql_select_db($DB_DATABASE, $conn) or die("I cannot not find the database.");





/* Include files */

require_once("paging.inc.php");

$limit = 5;
	
	
function input($str)

{

	return trim(addslashes($str));

}

function output($str)

{

	return stripslashes($str);

}

?>

<script>

function StripSpecialCharacters(characterTotal){

		var chars = /^([A-Za-z0-9\ ])$/;

		var newChar = "";

		var oldChar = characterTotal.split("");

		for(var q=0; q<oldChar.length;q++){

			if(oldChar[q].match(chars))

			{

				newChar = newChar + oldChar[q].toString();

			}

		}

		return newChar;

}

			

function createHeading(tVal, toId){

	document.getElementById(toId).value = StripSpecialCharacters(tVal);

}

</script>

