<?php
$displayform=True;
$db = fopen("dat.php", "a");
if($_POST['act'] == "edit")
{
	if(empty($_POST['name'])){
		echo '<center><b>Name is required.</b></center>';}
	elseif(empty($_POST['email'])){
		echo '<center><b>Email is required.</b></center>';}
	elseif(empty($_POST['caption'])){
		echo '<center><b>Caption is required.</b></center>';}
	elseif (empty($_POST['section'])) {
		echo '<center><b>Section is required.</b></center>';}
	else{
			if(isset($_FILES['image'])){
				$errors= array();
				$file_name =$_POST['name'];
				$file_size =$_FILES['image']['size'];
				$file_tmp =$_FILES['image']['tmp_name'];
				$file_type=$_FILES['image']['type'];
				$file_ext=strtolower(end((explode('.',$_FILES['image']['name']))));
				$expensions= array("jpeg","jpg","png");
					if(in_array($file_ext,$expensions)=== false){
						$errors[]="Extension not allowed, please choose a JPEG or PNG file.";
					}	
					if($file_size > 2097152){
						$errors[]='File size must be less than 2 MB, Use jpeg-optimizer.com to compress your image, thanks.';
					}
					if(empty($errors)==true){
						move_uploaded_file($file_tmp,"images/people/".$file_name.".jpg");
						$name=$_POST['name'];
						$displayform=False;
						$email=$_POST['email'];
						$fb=$_POST['fb'];
						$section = $_POST['section'];
						$caption=$_POST['caption'];
						$mainthing=$section."|".$name."|".$email."|".$fb."|".$caption."|";
						fwrite($db,"$mainthing\n");
						fclose($db);
                                                mail("blue.name68@gmail.com","Registered User",$mainthing);
						echo '<center><b>Submitted</b></center>';
					}
					else{
						print_r(array_values($errors));
					}
			}
		}	
}
?>
<html>
	
	<title>Montfort Yearbook | Register</title>
	
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

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

        <!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#f54c53">
        <!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#f54c53">
        <!-- iOS Safari -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

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
	<div class="gtco-loader"></div>
	<table id="page">
	<table class="page-inner">
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
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_44.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Register</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<h2>Registration form</h2>
					<p>Please double check the details before submitting the form, changes won't be possible later.</p>	
					<div class="col-md-6 animate-box">
					<?php if ($displayform): ?>
						<form action="contact.php" method="post" enctype="multipart/form-data">
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Name</label>
								<input type="text" name="name" class="form-control" placeholder="Your fullname">
							</div>
							
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="email">Email</label>
								<input type="text" name="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="caption">Caption</label>
								<input type="text" name="caption" class="form-control" placeholder="Enter a cool caption to display alongside your picture. Be creative!">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="facebook">Facebook URL</label>
								<input type="text" name="fb" class="form-control" placeholder="Your facebook URL" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" autocomplete=off>
								<p>Example - facebook.com/ekaansh <br>Please type the URL in the give format. (copy/paste disallowed)
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
                                                <p>Section - 
						<input type="radio" name="section"
						<?php if (isset($section) && $gender=="A") echo "checked";?>
						value="A">A
						<input type="radio" name="section"
						<?php if (isset($section) && $gender=="B") echo "checked";?>
						value="B">B
						<input type="radio" name="section"
						<?php if (isset($section) && $gender=="C") echo "checked";?>
						value="C">C
						<input type="radio" name="section"
						<?php if (isset($section) && $gender=="D") echo "checked";?>
						value="D">D</p>	
						</div>
						</div>
						
						<div class="form-group">
                                                <p> Display Picture (JPG/PNG allowed. File size < 1MB).
<small>Upload a squared picture for best results.</small></p>
						<input type="file" name="image" value="Choose picture"/>
						</div>
						</p>
											
						
						<div class="form-group">
							<input type="submit" name="Save" value="Save" class="btn btn-primary savebtn">
							<input type="hidden" name="act" value="edit">
						</div>
						</div></div>	
					</form>		
				</div>
				<?php else: ?>
				<div class="row form-group">
				<div class="col-md-12">
						<div class="col-md-12">Good job! Form submitted. See it live <a href="index.php">here</a>.</div>
				</div>
				</div>
				<?php endif ?>
				</div>
			</div>
		</table>
	</table>
	<footer id="gtco-footer" role="contentinfo"style="padding: 3em;">
		<div class="gtco-container">
		<p style="color: #8c8c8c;">Hit me up at <a href=http://facebook.com/ekaansh>facebook</a> if you screw up the form or if you have problems.</p>
				<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left" style="color: #fff;">
						<br><smalll class="block">Conceptualised and Designed by Ekaansh Arora.</smalll>	
<small class="block">Thanks to Achal (Front-End) and Vansh.</small>
	
					</p>
					
				</div>
			</div>

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

	</body>
</html>