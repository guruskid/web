<?php include_once 'inc/db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>REGISTRATION</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="//" />
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- pop-up-box -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up-box -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
	<div class="header-w3ls-agileinfo">
		<div class="wthree_agile_top_header">
			<div class="logo-agileits">
				<h1><a href="./"><span>Student</span>Fund <i class="fa fa-graduation-cap" aria-hidden="true"></i></a></h1>
			</div>
			<div class="agileits_w3layouts_sign_in">
				<ul>
					<li><a class="sign" href="login">Sign In</a></li>
					<li><a class="signup" href="register">Register</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="container">
			<div class="w3layouts_agileits_nav_section">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="w3ls__agileinfo_search">
						<form action="#" method="post">
							<input type="search" name="Search" placeholder="Search here..." required="">
							<input type="submit" value=" ">
						</form>
					</div>
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="./" class="hvr-rectangle-out">Home</a></li>
								<li><a href="path" class="hvr-rectangle-out">Path</a></li>
								<li><a href="sponsor" class="hvr-rectangle-out">Sponsor</a></li>
								<li><a href="contact">Contact</a></li>
							</ul>
						</nav>
					</div>
				</nav>	
			</div>
		</div>
	</div>
		<!-- //header -->
		<hr>
		           <!--  Login Form -->
           <section>
            <div class="container register">
              <div class="title"><h2>REGISTRATION</h2></div>
              <div class="formBox">
                <form action="">
                  <div class="left">
                    <p>First Name</p>
                    <input type="text" name="firstname" placeholder="First Name">
                  </div>
                  <div class="right">
                    <p>Last Name</p>
                    <input type="text" name="lastname" placeholder="Last Name">
                  </div>
                  <p>Email:</p>
                  <input type="email" name="email" placeholder="Email Address">
                  <div class="left">
                    <p>Password:</p>
                    <input type="Password" name="password" placeholder="Password"> 
                  </div>
                  <div class="right">
                    <p>Confirm Password</p>
                    <input type="password" name="password1" placeholder="Confirm Password">
                  </div>
                  <input type="submit" name="" value="REGISTER">
                  <a href="#">Already Have Account ?</a>
                </form>
              </div>
            </div>
           </section>
           <!-- End Login Form -->
           <!-- End Login Form -->
			<!-- Footer -->
			<div class="footer w3ls">
				<div class="container">
					<div class="footer-main">
						<div class="copyrights">
							<p>&copy;  All Rights Reserved</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer -->	
			<!-- start-smoth-scrolling -->
			<!-- js -->
			<!--//pop-up-box -->
			<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
			<!--pop-up-box -->
	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>