
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CS Attack</title>
<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="js/raphael-min.js"></script>
<script type="text/javascript" src="js/clock.js"></script>
</head>

<body>
<div id="body-wrapper">
<!-- Wrapper for the radial gradient background -->
<div id="sidebar">
  <?php include("sidebar.php");?>
</div>
<!-- End #sidebar -->
<div id="clock_id" style="float:right; margin-right:80px;"></div>
<script>draw_clock(110, "#f5f5f5", 5, "#E18325", 4, "#000000", 25, "#444444", 32, "#444444", 35, 8, "#444444")</script>
<div id="main-content"> 
<h2>Welcome <?=$_SESSION['adminName']?> !! </h2>