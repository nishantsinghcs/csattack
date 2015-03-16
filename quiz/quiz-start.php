<?php
@session_start();
if(!isset($_SESSION['SESS_FIRST_NAME'])){
//echo "hello brother";
header('location:./login.php?quiz');
}


//echo $_SESSION['SESS_FIRST_NAME'];

?>
<!--Author: Nishant Singh contact nishant_cs@hotmail.com for any query in the module.. -->
<html>
	<title>CS Attack Quiz</title>
	<head>
		<meta charset="utf-8">
			
		<meta name="keywords" content="Quiz by nishant" />
		<meta name="description" content="Quiz">
		<meta name="author" content="Nishant">

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

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>
<!-- Mohit Ka head start-->
	
	<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>	
	<script type="text/javascript" src="js/javascript.js"></script>
	<style>
		body{
				margin: 0;
font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
font-size: 14px;
line-height: 20px;
color: #333;
background-color: #fff;
		}
		a{
			text-decoration:none;
		}
		.Container{
					display:block;
					width: 100%;
					padding-right: 20px;
					padding-left: 20px;
					visibility:hidden;
					
		}
		.left-container{
							display:block;
							width:74.35897435897436%;
							
							float:left;
							
						
		}
		.left-container .header{
									display:block;
									width:100%;
									height:40px;
									border-radius:5px;
									background:rgba(67,10,173,0.8);
									
		}
		.left-container .header .left-header{
												display:inline-block;
												float:left;
												color:#fbfbfb;
												margin:5px 10px;
												font:24px "Calibri";
		}
		.left-container .header {
												display:inline-block;
												float:right;
												color:#fbfbfb;
												margin:5px 10px;
												font:22px "Calibri";
		}
		.right-header 			{				
												float:right;
												margin-right:400px;
												
		}
		.left-container .question-wrapper{
													display:inline-block;
													width:100%;
													height:100%;
													
		}
		.left-container .question-wrapper p{
														display:block;
														font:17px "Georgia";
														color:#333;
														text-align:justify;
		}
		.left-container .question-wrapper label{
														display:inline-block;
														font:14px "Georgia";
														color:#333;
														margin:4px 10px;
		}
		.left-container .question-wrapper input[type="button"]{
																	display:inline-block;
																	background:rgba(9,55,125,0.7);
																	border:2px solid rgb(5,38,92);
																	margin:4% 0.5%;
																	color:#aabbcc;
																	font-weight:bold;
																	font:18px "Calibri";
																	padding:2px 5px;
																	cursor:pointer;
		}
		.right-container{
							
							width:23.076923076923077%;
							height:100%;
							float:right;
							
							
		}
		.right-container .wrapper{
									display:inline-block;
									width:80%;
									max-height:80%;
									height: auto;
									
		}
		.right-container .right-header{
													display:block;
													width:90%;
													height:30px;
													margin:0px 0px 10px;
													border-radius:5px;
													background:rgba(67,10,173,0.8);
													color:#fbfbfb;
													padding:5px 5%;
													font:20px "Calibri";
		}
		.right-container .wrapper .span-wrapper{
													display:inline-block;
													height:20px;
													width: 42px!important;
													height:24px;
													text-align:center;
													font-size: 14px;
													font-weight: normal;
													line-height: 20px;
													border: 1px solid #ccc;
													border-radius:2px;
													margin:3px;
													float:left;
													cursor:pointer;
													background-color: #faa732;
													color: #fff;
													text-shadow: 0 -1px 0 rgba(0,0,0,0.25); */
/* background-color: #faa732; */
background-image: -moz-linear-gradient(top,#fbb450,#f89406);
/* background-image: -webkit-gradient(linear,0 0,0 100%,from(#fbb450),to(#f89406)); */
background-image: -webkit-linear-gradient(top,#fbb450,#f89406);
background-image: -o-linear-gradient(top,#fbb450,#f89406);
/* background-image: linear-gradient(to bottom,#fbb450,#f89406); */
/* background-repeat: repeat-x; */
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffbb450',endColorstr='#fff89406',GradientType=0);
/* border-color: #f89406 #f89406 #ad6704; */
/* border-color: rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25); */
filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}

.submit-test-btn{	color: #fff;
background-color: #04c;
padding: 11px 19px;
font-size: 17.5px;
-webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px;
display: inline-block;
border: 1px solid #ccc;
cursor:pointer;
}	
.submit-test-btn:hover{
color: #fff;
background-color: #04c;
}
.nav-bar-container{
	display: block;
	background: none repeat scroll 0 0 #438eb9;
	border: 0 none;
	margin-top: 280px;
	display: block;
	min-height: 40px;
	height:80px;
	width:100%;
}
	</style>

	<script type="text/javascript">

function countdown(minutes) {
    var seconds = 60;
    var mins = <?php echo $_SESSION['SESS_MARKS_TEST']; ?>;
    function tick() {
        var counter = document.getElementById("clock");
        var current_minutes = mins-1
        seconds--;
        counter.innerHTML = current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        if( seconds > 0 ) {
            setTimeout(tick, 1000);
        } else {
             
            if(mins > 1){
                 
               // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst    
			  // console.log("CountDown called");
               setTimeout(function () { countdown(mins - 1); }, 1000);
                     
            }
			else{
				SubmitTest();
			}
        }
    }
    tick();
}
	</script>
	
	</head>
	<body onload="SelectdValue(1);">
	<div class="nav-bar-container" style="margin-top:0px;">
		<a href="./index.php"><img src="./img/logo.png" style="width:200px;height:70px;"></a>
	</div>
	<div class="Container"  id="container">

<!-- timer   -->

<table width="100%"><tbody><tr><td><b style="float:right">Time Remaining:<div class="right-header" id="clock"></div></b></td></tr></tbody></table>
<!-- end timer -->
		<div class="left-container">
					<!-- Question in table  -->

<table width="100%" id="question_0_0">
	<tbody>
		<tr>
			<td style="border-bottom: 1px solid gray;">
				<div >
				<b><div  id="quest_no">
					Question No.
				</div>
			</b>
				</div>
			</td>
		</tr>
		<tr>
			<td><p id="quest"> Question</p></td>
		</tr>
		<tr>
			<td>
				<table id="question-options">
					<tbody>
						<tr>
							<td>
								<input type="radio" name="options" value="1" id="A" onClick="setAnswer(this.value);"/><label for="A">A</label>
							</td>
						</tr>
						<tr>
							<td>
								<input type="radio" name="options" value="2" id="B" onClick="setAnswer(this.value);"/><label for="B">B</label>
							</td></tr><tr>
							<td><input type="radio" name="options" value="3" id="C" onClick="setAnswer(this.value);"/><label for="C">C</label>
							</td>
							
						</tr>
						<tr>
							<td><input type="radio" name="options" value="4" id="D" onClick="setAnswer(this.value);"/><label for="D">D</label>
							</td>
							
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			
		</tr>
	</tbody>
</table>

					
					
					

		<!-- Question in table end -->
			
		</div>
		
		<div class="right-container">
			<b><h4>Answer Sheet</h4><b>
			<div class="wrapper" id="notation">
			
			</div>

			<!-- submit burtton  -->
			<br><br>
<input type="button" value="Submit Test"  onClick="SubmitTest();"/ class="submit-test-btn" >
			<!-- end submit button -->

			<!--Author: Nishant Singh contact nishant_cs@hotmail.com for any query in the module.. -->
		</div>





<!--  Navigation bar  -->

<div class="nav-bar-container">

		<div style="float:left;padding:10px;" >
          <input type="button" value="Next"  onClick="getNext();" class="submit-test-btn" style="background-color: #5bb75b;
background-image: -moz-linear-gradient(top,#62c462,#51a351);
linear-gradient(to bottom,#62c462,#51a351);"/>
      </div>
       <div style="float:left;padding:10px;margin-left:250px;">
            <input type="button" value="Previous" onClick="getPrev();"class="submit-test-btn" style="background-color: #5bb75b;
background-image: -moz-linear-gradient(top,#62c462,#51a351);
linear-gradient(to bottom,#62c462,#51a351);"/>
        </div>
         <div style="float:left;padding:10px;margin-left:250px;">
            <input type="button" value="Reset"  onClick="ResetSelection();" class="submit-test-btn" style="background-color: #5bb75b;
background-image: -moz-linear-gradient(top,#62c462,#51a351);
linear-gradient(to bottom,#62c462,#51a351);"/>
         </div>
       
          
 </div>

<!-- navigation bar End -->

</div>

	</body>
</html>