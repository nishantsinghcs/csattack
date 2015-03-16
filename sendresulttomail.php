<?php
include_once('config.php');


$email=$_SESSION['SESS_EMAIL'];
$correct=$_POST['correctans'];
$wrong=$_POST['wrongans'];
$noans=$_POST['noans'];
$total=$_POST['totalmarks'];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Additional headers
$headers .= 'From: CS QUIZ RESULT<info@seosmoppc.co.in>' . "\r\n";
$headers .= 'Cc: nishant_cs@hotmail.com';
$subject = "CS Attack Quiz Result";
$message = " <b>Your score is :</b> <b> $correct <b>out of $total . <br><br>
<strong>Detail:</strong><br><br><br>
Correct Answers:<b> $correct<b> <br><br>
Wrong Answers: $wrong <br><br>
No Answer: $noans <br><br>
Total Questions: $total <br><br><br><br>

Thank you for taking Quiz.<br><br><br>

<b>CS Attack Quiz Team</b>




";

$message = wordwrap($message, 70);


mail($email,$subject,$message,$headers);




?>
<!DOCTYPE html>
<html>

<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>csattack.com online elearning</title>		
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
							</div>
						</form>
					</div>
					<ul class="social-icons">
						<li class="facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
						<li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
						<li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin">Linkedin</a></li>
					</ul>
					<nav>
						<ul class="nav nav-pills nav-top">
							<li>
								<a href="contact-us.php"><i class="fa fa-angle-right"></i>Contact Us</a>
							</li>
							<li class="phone">
								<span><i class="fa fa-phone"></i>0120-4120500<br>&nbsp;&nbsp;&nbsp;&nbsp; 099711-55706</span>
							</li>
						</ul>
					</nav>
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
										Downloads
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li>
											<div class="mega-menu-content">
												<div class="row">
													<div class="col-md-3">
														<ul class="sub-menu">
															<li>
																<span class="mega-menu-sub-title">CS Foundation</span>
																<ul class="sub-menu">
																	<h4>Module 1</h4>
																	<li><a href="#">Business Economics & Statics</a></li>
                                                                    <li><a href="#">Business Management Ethics & Communication</a></li>
                                                                    <li><a href="#">Business Environment &  Entrepreneurship</a></li>
                                                                    <li><a href="#">Fundamentals of Accounting & Auditing</a></li>
                                                                    
                                                                 
																</ul>
															</li>
														</ul>
													</div>
													<div class="col-md-3">
														<ul class="sub-menu">
															<li>
																<span class="mega-menu-sub-title">CS Executive</span>
																<ul class="sub-menu">
																	<h4>Module 1</h4>
																	<li><a href="#">Company Law</a></li>
                                                                    <li><a href="#">Cost and Management Accounting</a></li>
                                                                    <li><a href="#">Tax Laws & Practice</a></li>
                                                                    <h4>Module 2</h4>
                                                                    <li><a href="#">Company Accounts & Auditing Practices</a></li>
                                                                    <li><a href="#">Capital Markets and Securities Laws</a></li>
                                                                    <li><a href="#l">Industrial Labour & General Laws</a></li>
                                                                 
																</ul>
															</li>
														</ul>
													</div>
													<div class="col-md-3">
														<ul class="sub-menu">
															<li>
																<span class="mega-menu-sub-title">CS Professional</span>
																<ul class="sub-menu">
																	<h4>Module 1</h4>
																	<li><a href="#">Advance Company Law and Practice</a></li>
                                                                    <li><a href="#">Secretarial Audit , Compliance Management and Due DiIligence</a></li>
                                                                    <li><a href="#"> Corporate Restructuring, Valuation and Insolvency</a></li>
                                                                    <h4>Module 2</h4>
                                                                    <li><a href="#">Information Technology and System Audit</a></li>
                                                                    <li><a href="#">Financial Treasury and Forex Management</a></li>
                                                                    <li><a href="#l">Ethics , Governance and Sustainability</a></li>
                                                                    
																</ul>
																
															</li>
														
														</ul>
													</div>
													<div class="col-md-3">
														<ul class="sub-menu">
															
															<li>
																<ul class="sub-menu">
																	<h4>Module 3</h4>
																	<li><a href="#">Advance Tax Laws and Practice</a></li>
                                                                    <li><a href="#">Drafting Appearances and Pleadings</a></li>
                                                                    <li><a href="#"> Electives 1 out of below 5 subjects:</a></li>
                                                                   	<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;Banking Law and Practice</a></li>
                                                                   	<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;Capital , Commodity and Money Market </a></li>
                                                                   	<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;Insurance Law and Practice</a></li>
                                                                   	<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;Intellectual Property Rights-Law</a></li>
                                                                   	<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;International Business-Laws & Practices </a></li>
																</ul>
															</li>
														</ul>
													</div>
													
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li>
									<a href="page-team.php">Gallery</a>
								</li>
								<li>

									<a href="./quiz-selector.php" >Quiz</a>
								</li>
								<li>
									<a href="">Blog</a>
								</li>
								
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
										echo $_SESSION['SESS_FIRST_NAME'];
										echo "</a>";
										echo "<a href='./logout.php' style='text-decoration:none'> &nbsp;&nbsp;&nbsp;LOGOUT</a>
										</div>"	;
										
									}
									?>
									
									
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

										<div style="width:450px;margin-left:30%">

														<div class="signin-form">

															<br><br><br><strong style="background:green; color:white;padding:5px;">You have Result has been Susessfully sent to <?php echo $_SESSION['SESS_EMAIL']?> <img src="./img/tick.png" style="height:10px;width:10px;"></strong>
															<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
															

															

															
														</div>
										</div><!-- main loggin wrapper end -->



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
									<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> Vaishali Ghaziabad Office 497 Basement, Sector-4</p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> 0120-4120500 , 099711-55706</p></li>
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
