<?php
include("includes/config.php");
require_once("functions.php");

if(isset($_POST['signin'])){

	AdminLogin($_POST,$error);

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CS-ATTACK - Admin Sigin</title>
<!--CSS-->
 <link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
<script language="javascript">
function validateForm()
{
var x=document.forms["frm"]["username"].value;
var y=document.forms["frm"]["userPassword"].value;

if (x==null || x=="")
  {
  alert("User name must be filled out");
  return false;
  }
if (y==null || y=="")
  {
  alert("Password must be filled out");
  return false;
  }
}
</script>
</head>

<body id="login">
<div id="login-wrapper" class="png_bg">
  <div id="login-top"> 
    
  <!-- Logo (221px width) --> 
    <img id="logo" src="images/logo.png" alt="Simpla Admin logo" /> </div>
  <!-- End #logn-top -->
  
  <div id="login-content">
    <form name="frm" action="" method="post" onsubmit="return validateForm()">
      <div class="notification information png_bg">
        <div id="logerr_msg"><?php if(isset($error)) echo $error; else echo'Please enter Username and Password.'; ?> </div>
      </div>
      <p>
        <label>Username</label>
        <input class="text-input" type="text" name="username" id="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'];?>" />
      </p>
      <div class="clear"></div>
      <p>
        <label>Password</label>
        <input class="text-input" type="password" name="userPassword" id="userPassword" />
      </p>
      <div class="clear"></div>
      <p>
        <input class="button" type="submit" name="signin" value="Sign In" />
      </p>
    </form>
  </div>
  <!-- End #login-content --> 
  
</div>
<!-- End #login-wrapper -->

</body>
</html>