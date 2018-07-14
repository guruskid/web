<?php include_once 'inc/db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Payment</title>
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

            <div class="container cardp">
            	<div class="title"><h2>Card Payment</h2></div>
            	<div class="formBox">
            		<form action="">
            			<p>Name on Card: </p>
            			<input type="text" name="name" placeholder="John Smith" required="">
            			<p>Card Number: </p>
            			<input type="text" name="number"inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;" required="">
            			<div class="left form-group">
            				<p>Expiration Date</p>
            				<input type="text" name="expiration-month-and-year" placeholder="MM / YY" required="">
            			</div>
            			<div class="right form-group">
            				<p>CVV</p>
            				<input Â·inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;" required="">
            			</div>
            			<input type="submit" name="submit" value="Make a payment">
            		</form>
            	</div>
            </div>

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
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<script>
				$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});
				});
			</script>
			<!-- //pop-up-box -->
			<!-- //js -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
			<script src="js/jzBox.js"></script>
			<!-- Countdown-Timer-JavaScript -->
			<script src="js/simplyCountdown.js"></script>
			<script>
				var d = new Date(new Date().getTime() + 948 * 120 * 120 * 2000);

				// default example
				simplyCountdown('.simply-countdown-one', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate()
				});

				// inline example
				simplyCountdown('.simply-countdown-inline', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					inline: true
				});

				//jQuery example
				$('#simply-countdown-losange').simplyCountdown({
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					enableUtc: false
				});
			</script>
		<!-- //Countdown-Timer-JavaScript -->
		<!-- smooth scrolling -->
		<script type="text/javascript">
			$(document).ready(function() {
			/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
			*/								
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>