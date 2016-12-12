<?php
		// PHP server code is called within the <?php tags.
		error_reporting(0);			// Error logging is turned off.
?>

<!DOCTYPE html>
<html>
<head>

<title>Work Experience Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- CSS Files -->
<link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="./css/font-awesome.min.css" rel="stylesheet">
<link href="./fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
<link href="./css/animate.css" rel="stylesheet" media="screen">
<link href="./css/owl.theme.css" rel="stylesheet">
<link href="./css/owl.carousel.css" rel="stylesheet">

<!-- Colors -->
<link href="./css/css-index.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://epq.space/js/jquery.ddslick.min.js"></script>

<!-- Google Fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

</head>

<body data-spy="scroll" data-target="#navbar-scroll">

<!-- /.preloader -->
<div id="preloader"></div>
<div id="top"></div>

<!-- /.parallax full screen background image -->
<div class="fullscreen landing parallax" style="background-color: #8a8a8a;" data-img-width="2000" data-img-height="1333" data-diff="100">

	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-6">

					<!-- /.main title -->
					<img class="wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft; max-width: 200px; padding-top: 70px; padding-bottom: 10px;" src="./images/logo.png" />

					<!-- /.header paragraph -->
					<div class="landing-text wow fadeInLeft animated">
						<p>Our service is a Work Experience Managment System which allows staff to easily monitor work experience placements students may take in schools. Students can organise and record their work placements which can be easily viewed by the appropriate staff members.</p>
					</div>

				</div>
        <div class="col-md-1" id="login"></br></div>

				<!-- /.sign-in form -->
				<div class="col-md-5">
					<div class="signup-header wow fadeInRight animated">
						<h3 class="form-title text-center">Login to Work Ex</h3>
						<?php if (isset($_GET['error'])) { echo("<p class='form-title text-center'>" . $_GET['error'] . "</p>"); } ?>
						<form class="form-header" action="./login.php" role="form" method="POST">
							<div class="form-group">
							<div class="form-group">
								<input class="form-control input-lg" name="username" id="username" type="text" placeholder="Username" required>
							</div>
							<div class="form-group">
								<input class="form-control input-lg" name="password" id="password" type="password" placeholder="Password" required>
							</div>
							<div class="form-group last">
								<input type="submit" class="btn btn-warning btn-block btn-lg" value="LOGIN">
							</div></br>
							</form>
						</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- NAVIGATION -->
<div id="menu">
	<nav class="navbar-wrapper navbar-default" role="navigation">
		<div class="container">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand site-name" href="#top" style="padding-top: 15px;">Work Ex</a>
			  </div>

			  <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="#contact">Contact Us</a></li>
				</ul>
			  </div>
		</div>
	</nav>
</div>

<!-- /.contact section -->
<div id="contact">
	<div class="contact fullscreen parallax" style="background-color: #8a8a8a;" data-img-width="2000" data-img-height="1334" data-diff="100">
		<div class="overlay" style="background-color: #E9E9E9 !important; color: black;">
			<div class="container">
				<div class="row contact-row">

					<!-- /.address and contact -->
					<div class="col-sm-5 contact-left wow fadeInUp">
						<h2><span class="highlight">Get in touch today</span></h2>
							<ul class="ul-address">
							<li><i class="pe-7s-map-marker"></i>Clevedon, United Kingdom
							</li>
							<li><i class="pe-7s-phone"></i>0330 043 2085</li>
							<li><i class="pe-7s-mail"></i><a href="mailto:hello@workexperience.co">hello@workexperience.co</a></li>
							<li><i class="pe-7s-look"></i><a href="#">WorkExperience.co</a></li>
							</ul>

					</div>
					<!-- /.contact form -->
					<div class="col-sm-7 contact-right">
						<form method="GET" id="contact-form" class="form-horizontal" action="#">
							<div class="form-group">
                <input type="text" name="name" id="name" class="form-control wow fadeInUp" placeholder="Fullname" required/>
                <input type="text" name="school" id="company" class="form-control wow fadeInUp" placeholder="School name" required/>
  						</div>
							<div class="form-group">
							<input type="hidden" name="subject" value="contact" />
							<input type="hidden" name="ref" value="WEX" />
							<input type="text" name="to" id="Email" class="form-control wow fadeInUp" placeholder="Email address" required/>
              <input type="text" name="phone" id="phone" class="form-control wow fadeInUp" placeholder="Contact number" required/>
              </div>
							<div class="form-group">
							<textarea name="msg" rows="20" cols="20" id="Message" class="form-control input-message wow fadeInUp"  placeholder="Enter your message..." required></textarea>
							</div>
							<div class="form-group">
							<input type="submit" name="submit" value="Submit" class="btn btn-success wow fadeInUp" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- /.footer -->
<footer id="footer">
	<div class="container">
		<div class="col-sm-4 col-sm-offset-4" style="width: 100%; margin: 0px;">
			<!-- /.social links -->
			<div class="text-center wow fadeInUp" style="font-size: 14px;"><a href="http://workexperience.co/">Work Experience Management</a></br>
			&copy; <?php echo(date("Y")); ?> All Rights Reserved.</div>
			<a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
		</div>
	</div>
</footer>

	<!-- /.javascript files -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.sticky.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
  </body>
</html>
