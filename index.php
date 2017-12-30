<?php 

    $lines = file("dat.php", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $data = array_map(function($v){
        list($section, $name, $email, $fb, $caption) = explode("|", $v);
        return ["section" => $section, "name" => $name, "email" => $email, "fb" => $fb, "caption" => $caption];
    }, $lines);


?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="UTF-8">
	<!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
	<title>Montfort Yearbook</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

        <!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#f54c53">
        <!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#f54c53">
        <!-- iOS Safari -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	</head>
	<body>
	<?php include_once("analyticstracking.php") ?>
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
						<div id="gtco-logo"><a href="index.php">Home <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li class="active"><a href="contact.php">Register</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(images/img_4.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Welcome to Montfort Yearbook</h1>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Batch of 2017</h2>
					<p>Add yourself to the yearbook <a href=contact.php>here</a>.</p>
				</div>
			</div>
			<div class="row">
			<h2 >Section A</h2> <hr class="line" align="left"></hr>
<?php foreach($data as $user){ 
if($user["section"]=='A')
{?>
<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="fh5co-project-item">
						<figure>
							<div class="overlay"></div>
							<img src="images/people/<?php echo $user["name"];?>.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2><?php echo $user["name"]; ?></h2> <hr class="hline"></hr>
							<p style="font-size: 20px;"><i><?php echo $user["caption"]; ?></i></p>
							<p>
							<a target="_blank" href="//<?php echo $user["fb"]; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></p>
						</div>
					</div>
				</div>
<?php }} ?>
</div>
<div class="row">
			<br><h2 >Section B</h2> <hr class="line" align="left"></hr>
<?php foreach($data as $user){ 
if($user["section"]=='B')
{?>
<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="fh5co-project-item">
						<figure>
							<div class="overlay"></div>
							<img src="images/people/<?php echo $user["name"];?>.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2><?php echo $user["name"]; ?></h2> <hr class="hline"></hr>
							<p style="font-size: 20px;"><i><?php echo $user["caption"]; ?></i></p>
							<p>
							<a target="_blank" href="//<?php echo $user["fb"]; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></p>
						</div>
					</div>
				</div>
<?php }} ?>
</div>
<div class="row">
			<h2>Section C</h2> <hr class="line" align="left"></hr>
<?php foreach($data as $user){ 
if($user["section"]=='C')
{?>
<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="fh5co-project-item">
						<figure>
							<div class="overlay"></div>
							<img src="images/people/<?php echo $user["name"];?>.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2><?php echo $user["name"]; ?></h2> <hr class="hline"></hr>
							<p style="font-size: 20px;"><i><?php echo $user["caption"]; ?></i></p>
							<p>
							<a target="_blank" href="//<?php echo $user["fb"]; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></p>
						</div>
					</div>
				</div>
<?php }} ?>
</div>
<div class="row">
			<h2 >Section D</h2> <hr class="line" align="left"></hr>
<?php foreach($data as $user){ 
if($user["section"]=='D')
{?>
<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="fh5co-project-item">
						<figure>
							<div class="overlay"></div>
							<img src="images/people/<?php echo $user["name"];?>.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2><?php echo $user["name"]; ?></h2> <hr class="hline"></hr>
							<p style="font-size: 20px;"><i><?php echo $user["caption"]; ?></i></p>
							<p>
							<a target="_blank" href="//<?php echo $user["fb"]; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></p>
						</div>
					</div>
				</div>
<?php }} ?>
</div>
			</div>
		</div>
	</div>

	<footer id="gtco-footer" role="contentinfo"style="padding: 3em;">
	
		<div class="gtco-container">
			<smalla class="block">Conceptualised, Designed and Back-End by <u>Ekaansh Arora.</u></smalla>
<br>	
<small class="block">Thanks to Achal (Front-End) and Vansh.</small>
			
		</div>

	</footer>
	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>	
        <!-- KONAMI -->
        <script src=js/konami.js></script>
	</body>
</html>