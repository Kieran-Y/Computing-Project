<?php
		session_start();
		if (!isset($_SESSION['username'])) {
        // Not logged in.
  			header("Location: ./index.php");
  			exit();
		}
?>

<!DOCTYPE html>
<html>
<head>

<title>Log | Work Ex</title>
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

<style type="text/css">
		.avatar {
				border-radius: 50%;
				width: 28px;
				margin-right: 7px;
		}
</style>

</head>

<body data-spy="scroll" data-target="#navbar-scroll">

<!-- /.preloader -->
<div id="preloader"></div>
<div id="top"></div>

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
					<li><a href="./dashboard.php">Home</a></li>
					<li><a href="./log.php">Log</a></li>
					<li class="active"><a href="./resources.php">Resources</a></li>
          <li><a href="./logout.php">Logout</a></li>
				</ul>
			  </div>
		</div>
	</nav>
</div>

<!-- /.content section -->
<div id="content">
	<div class="contact fullscreen parallax" style="background-color: white; margin-top: 25px;" data-img-width="2000" data-img-height="1334" data-diff="100">
		<div class="overlay" style="color: black; background-color: white;">
			<div class="container">
				<div class="row">

					<div class="col-md-7 wow fadeInUp">
						<h2><span class="highlight">Extra Resources</span></h2>
					</div>
					<div class="col-md-1 wow fadeInUp"></div>

					<div class="col-md-3 wow fadeInUp">
						<div id="dashboard">
							<div class="container">
								<div class="row">
								</br></br>
									<!-- /.intro content -->
									<div class="col-md-4 wow">
										<ol class="breadcrumb">
											<li class="active">Currently logged in as: </li></br>
											<?php echo('<img class="avatar" src="data:image/png;base64,'.$_SESSION["avatar"].'" />'); ?>   <?php echo($_SESSION["fullname"]); ?></br>
										</ol>
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
