<?php
include_once('config.php');
if(!isset($_SESSION['SESS_FIRST_NAME'])){

header('location:./login.php?quiz-selector');
}
?>
<!DOCTYPE html>
<html>

<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>csattack:Quiz</title>		
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/bootstrap.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css">
		<link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.css" media="screen">
		<link rel="stylesheet" href="vendor/owlcarousel/owl.theme.css" media="screen">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" media="screen">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">
		<link rel="stylesheet" href="css/theme-animate.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css" media="screen">
		<link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css" media="screen">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>

		<!--[if IE]>
			<link rel="stylesheet" href="css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="vendor/respond/respond.js"></script>
			<script src="vendor/excanvas/excanvas.js"></script>
		<![endif]-->

	</head>
	<body>

		<div class="body">
			<header id="header">
				<div class="container">
					<h1 class="logo">
						<a href="index.php">
							<img alt="Porto" width="280" height="100" data-sticky-width="82" data-sticky-height="40" src="img/logo.png">
						</a>
					</h1>
					<div class="search">
						<form id="searchForm" action="#" method="get">
							<div class="input-group">
								<input type="text" class="form-control search" name="q" id="q" placeholder="Search..." required>
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
								</span>
								<span>
									<?php
									if(!isset($_SESSION['SESS_FIRST_NAME'])){
									 //header ("location : login.php");
										echo "
										<li class='dropdown mega-menu-item mega-menu-signin signin' id='headerAccount'>
										<a class='dropdown-toggle' href='#'>
										<i class='fa fa-user'></i> Sign In
										<i class='fa fa-angle-down'></i>
									</a>";
										
										}
										else{

											echo "<div style='float:right;display:block;color:red;margin-top:8px;'>";
											echo "<a href='./myacc.php'>";
										echo "Welcome: ".$_SESSION['SESS_FIRST_NAME'];
										echo "</a>";
										echo "<a href='./logout.php' style='text-decoration:none'> &nbsp;&nbsp;&nbsp;LOGOUT</a>
										</div>"	;
										
									}
									?>
								</span>
							</div>
						</form>
					</div>
					<ul class="social-icons">
						<li class="facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
						<li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
						<li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin">Linkedin</a></li>
					</ul>
					
					<button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
						<i class="fa fa-bars"></i>
					</button>
				</div>
				<div class="navbar-collapse nav-main-collapse collapse">
					<div class="container">
						<nav class="nav-main mega-menu">
							<ul class="nav nav-pills nav-main" id="mainMenu">
								<li >
									<a href="index.php">Home</a>
								</li>
								<li>
									<a href="about-us.php">About Us</a>
								</li>
								
								<li class="dropdown mega-menu-item mega-menu-fullwidth">
									<a class="dropdown-toggle" href="download.php">
										Notes
										<i class="fa fa-angle-down"></i>
									</a>
									<?php 
									include_once ("./downloadmenu.php");
									?>
								</li>
								<li>
									<a href="#">Books</a>
								</li>
								<li class="active">

									<a href="./quiz-selector.php" >Quiz</a>
								</li>
								<li>
									<a href="">Blog</a>
								</li>
								
									
									
									
									<ul class="dropdown-menu">
										<li>
											<div class="mega-menu-content">
												<div class="row">
													<div class="col-md-12">

														<div class="signin-form">

															<span class="mega-menu-sub-title">Sign In</span>

															<form action="user-login-exec.php" id="" method="post">
																<div class="row">
																	<div class="form-group">
																		<div class="col-md-12">
																			<label>E-mail Address</label>
																			<input type="text" value="" name="email" class="form-control input-lg">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="form-group">
																		<div class="col-md-12">
																			<!--<a class="pull-right" id="headerRecover" href="#">(Lost Password?)</a>-->
																			<label>Password</label>
																			<input type="password" value="" name="password"class="form-control input-lg">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<span class="remember-box checkbox">
																		<!--	<label for="rememberme">
																				<input type="checkbox" id="rememberme" name="rememberme">Remember Me
																			</label>
																		-->
																		</span>
																	</div>
																	<div class="col-md-6">
																		<input type="submit" value="Login" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
																	</div>
																</div>
															</form>

															<p class="sign-up-info">Don't have an account yet? <a href="signin.php" >Sign Up!</a></p>

														</div>

														<div class="signup-form">
															<span class="mega-menu-sub-title">Create Account</span>

															<form action="register.php" id="" method="post">
																<div class="row">
																	<div class="form-group">
																		<div class="col-md-12">
																			<label>E-mail Address</label>
																			<input type="text" value="" class="form-control input-lg" name="email">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="form-group">
																		<div class="col-md-6">
																			<label>First Name</label>
																			<input type="text" value="" name="fname" class="form-control input-lg">
																		</div>
																		<div class="col-md-6">
																			<label>Last Name</label>
																			<input type="text" value="" name="lname" class="form-control input-lg">
																		</div>
																		<div class="col-md-6">
																			<label>Password</label>
																			<input type="password" value="" class="form-control input-lg" name="password">
																		</div>
																		<div class="col-md-6">
																			<label>Re-enter Password</label>
																			<input type="password" value="" class="form-control input-lg">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-12">
																		<input type="submit" value="Create Account" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
																	</div>
																</div>
															</form>

															<p class="log-in-info">Already have an account? <a href="#" id="headerSignIn">Log In!</a></p>
														</div>

														<div class="recover-form">
															<span class="mega-menu-sub-title">Reset My Password</span>
															<p>Complete the form below to receive an email with the authorization code needed to reset your password.</p>

															<form action="#" id="" method="post">
																<div class="row">
																	<div class="form-group">
																		<div class="col-md-12">
																			<label>E-mail Address</label>
																			<input type="text" value="" class="form-control input-lg">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-12">
																		<input type="submit" value="Submit" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
																	</div>
																</div>
															</form>

															<p class="log-in-info">Already have an account? <a href="#" id="headerRecoverCancel">Log In!</a></p>
														</div>

													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

										<div style="width:900px;margin-left:30%">
											<br><br><br><br>
											
														<div class="signup-form">
															<img src="./img/testspan2.jpg" style="float:right;width:250px;height:250px">


															
															
															
	<!-- Test criteria Start-->
	<form method="post" name="form1" action="./quiz.php">
  <fieldset>
			  
			  <script>





function getdata() {

 
 // alert('hello');
  document.getElementsByName ("chapters")[0].style.display='block';
   document.getElementsByName ("chapter-levela")[0].style.display='block';
   document.getElementsByName ("mlabel")[0].style.display='block';
   document.getElementsByName ("m1")[0].style.display='block';
   document.getElementsByName ("m2")[0].style.display='none';
   
   
}


function getcategory() {
  var e = document.getElementById("subject");
   	var f = e.options[e.selectedIndex].value;
      $.ajax({url: 'ajaxgetchapter.php?svalue='+f,
             success: function(output) {


             	document.getElementById("chapter").innerHTML=output;
                //alert(output);
               // $('#'+list_target_id).html(output);
            },
          error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status + " "+ thrownError);
          }});


	
 //alert(f); 
      
document.getElementsByName ("tstcat")[0].style.display='block';
 document.getElementsByName ("cato")[0].style.display='block';

}

function getmark1(){
	document.getElementsByName ("mlabel")[0].style.display='block';
	document.getElementsByName ("m2")[0].style.display='block';
	document.getElementsByName ("m1")[0].style.display='none';

	  document.getElementsByName ("chapters")[0].style.display='none';
   document.getElementsByName ("chapter-levela")[0].style.display='none';
}

			   </script>


					<b>	<label id="courselabel" style="display:block">CS Level </label></b>
				<div id="course1">
					<select name="course" id="course" style="display:Block">
					<option value="">Select Level</option>
					
					  <?php
					  $crs=$_SESSION['SESS_COURSE'];
                  $query="select * from quiz_course where course_name='$crs' ";
    $result=mysql_query($query);
    $row=mysql_fetch_array($result);
     echo "<option value='";echo $row[1];echo"'>"; echo $row[1];echo'</option>';
      
        ?>
					</select>
		        </div>
				<br/>
				<b>	<label id="sublevel" style="display:block">Subject</label></b>
				<div id="sub">
					<select name="subject" id="subject" style="display:Block" onchange="getcategory();">
					<option  value="">Select Subject</option>
					
					  <?php
					  $crs=$_SESSION['SESS_COURSE'];
                  $query="select * from quiz_subject_name where course_name='$crs' ";
    $result=mysql_query($query);
   while($row=mysql_fetch_array($result)){
     echo "<option  value='";echo $row[1];echo"'>"; echo $row[1];echo" </option>";
 }
      
        ?>
					</select>
		        </div>
		        <br>
				<b>	<label name="tstcat" style="display:none;">Test Category</label></b>
				<div name="cato" style="display:none">
					<input type="radio" name="jungle" value="mock" onclick="getmark1();"> MOCK TEST (All Chapters Full Lenght )<br>
  					<input type="radio" onclick="getdata();"name="jungle"  value="subject" >Chapter Wise Test<br>
  					<br/>
		        </div>
				

			
			<b>	<label name="chapter-levela" style="display:none">Select Chapter / Chapters</label></b>
				<!-- get chapters from ajax call -->
				<div id="chapter" name="chapters" style="display:none">
					
		        </div>
				<br>
				
				<b><label name="mlabel" id="markslabel" style="display:none">Marks</label></b>
				<div id="marks1" name="m1" style="display:none;">
					<select name="marks" id="marks" style="display:block">
					<option value="25">25</option>
					<option value="50">50</option>
					</select>
				</div>

				<div id="marks2" name="m2" style="display:none">
					<select id="marks" style="display:block">
					<option value="50">50</option>
					</select>
				</div>

				
				<br/><b>
				<label id="difflabel" style="display:block">Difficulty Level</label></b>
				<select name="level" id="diffoption" style="display:block">
					<option value="0">Without Negative Marking</option>
					<option value="1">With Negative Marking</option>
				</select>
				<label id="note1"  style="color:red;font-weight:bold;"></label><br/>
				                <input type="hidden" id="args"/>
                <input type="submit" id="submit" style="margin-top: 30px;display:block" class="button" value="Continue to test" />

			
  </fieldset>
</form>

<!-- end of test criteria -->

														</div>
												<hr>
										</div><!-- main SignIn wrapper end -->



			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Get in Touch</span>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Newsletter</h4>
								<p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
			
								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>
			
								<div class="alert alert-danger hidden" id="newsletterError"></div>
			
								<form id="newsletterForm" action="" method="POST">
									<div class="input-group">
										<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">Go!</button>
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<h4>Latest Tweets</h4>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "oklerthemes", "count": 2}'>
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
									
									<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="#">mail@csattack.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<h4>Follow Us</h4>
							<div class="social-icons">
								<ul class="social-icons">
									<li class="facebook"><a href="#" target="_blank" data-placement="bottom" rel="tooltip" title="Facebook">Facebook</a></li>
									<li class="twitter"><a href="#" target="_blank" data-placement="bottom" rel="tooltip" title="Twitter">Twitter</a></li>
									<li class="linkedin"><a href="#" target="_blank" data-placement="bottom" rel="tooltip" title="Linkedin">Linkedin</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<a href="index.php" class="logo">
									<img alt="Porto Website Template" class="img-responsive" src="img/logo.png" width="250" height="100">
								</a>
							</div>
							<div class="col-md-7">
								<p>© Copyright 2014. All Rights Reserved.</p>
							</div>
							<div class="col-md-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="#">FAQ's</a></li>
										<li><a href="#">Sitemap</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.js"></script>
		<script src="master/style-switcher/style.switcher.js"></script>
		<script src="vendor/bootstrap/bootstrap.js"></script>
		<script src="vendor/common/common.js"></script>
		<script src="vendor/jquery.validation/jquery.validation.js"></script>
		<script src="vendor/jquery.stellar/jquery.stellar.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.js"></script>
		<script src="vendor/twitterjs/twitter.js"></script>
		<script src="vendor/isotope/jquery.isotope.js"></script>
		<script src="vendor/owlcarousel/owl.carousel.js"></script>
		<script src="vendor/jflickrfeed/jflickrfeed.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="vendor/vide/jquery.vide.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Specific Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
		<script src="js/views/view.home.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<script type="text/javascript">
		
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-42715764-5']);
			_gaq.push(['_trackPageview']);
		
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		
		</script>

	</body>

<!-- Mirrored from preview.oklerthemes.com/porto/3.3.1/index-header-signin.php by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 08 Oct 2014 08:15:03 GMT -->
</html>
