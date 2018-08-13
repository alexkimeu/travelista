<?php
session_start();
error_reporting(0);
include('config.php');
if(isset($_POST['submit1']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];
$mobile=$_POST['mobileno'];
$subject=$_POST['subject'];
$description=$_POST['description'];
$sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Enquiry  Successfully submited";
}
else
{
$error="Something went wrong. Please try again";
}

}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Travel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism Management System In PHP" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">

<link rel="stylesheet" href="css/linearicons.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/nice-select.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/main.css">
<link href="stylesheet" href="css/style.css">
<link href="stylesheet" href="css/custom.css">


<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
</head>
<body>
<!-- top-header -->
<div class="top-header">


	<header id="header">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-sm-6 col-6 header-top-left">
						<ul>
							<li><a href="signup.php">Sign Up</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</div>
					<div class="col-lg-6 col-sm-6 col-6 header-top-right">
					<div class="header-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
					<div id="logo">
						<a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
					</div>
							<ul class="nav-menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="packages.html">Packages</a></li>
							<li><a href="hotels.html">Hotels</a></li>
							<li><a href="insurance.html">Car Hire</a></li>
							<li class="menu-has-children"><a href="">Blog</a>
								<ul>
									<li><a href="blog-home.html">Blog Home</a></li>
									<li><a href="blog-single.html">Blog Single</a></li>
								</ul>
							</li>
							<li class="menu-has-children"><a href="">Bookings</a>
								<ul>
										<li><a href="signup.php">Sign Up</a></li>
									 <li><a href="login.php">Login</a></li>
								</ul>
							</li>
							<li><a href="contact.php">Contact</a></li>
						</ul
					</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->

	<section class="relative about-banner">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Contact Us
					</h1>
					<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.html"> Contact Us</a></p>
				</div>
			</div>
		</div>
	</section>
<!--- /banner-1 ---->
<!--- privacy ---->


<section class="price-area section-gap">
	<div class="container">
					<div class="row d-flex justify-content-center">
							<div class="menu-content pb-70 col-lg-8">
									<div class="title text-center">
											 <h1 class="mb-10">Check out Amazing Deals</h1>
											<p>Enjoy the best safari packages , hotel reservations and car hire services in Kenya</p>
									</div>
							</div>
					</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="single-price">
					<h4>Budget Packages</h4>
					<ul class="price-list">
						<li class="d-flex justify-content-between align-items-center">
							<span>Nairobi</span>
							<a href="#" class="price-btn">$1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Rift Valley</span>
							<a href="#" class="price-btn">$1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Coast</span>
							<a href="#" class="price-btn">$1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Mt Kenya</span>
							<a href="#" class="price-btn">$1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Samburu</span>
							<a href="#" class="price-btn">$1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Zanzibar</span>
							<a href="#" class="price-btn">$1500</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-price">
					<h4>Luxury Packages</h4>
					<ul class="price-list">
						<li class="d-flex justify-content-between align-items-center">
							<span>Nairobi</span>
							<a href="#" class="price-btn">$1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Rift Valley</span>
							<a href="#" class="price-btn">$1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Coast</span>
							<a href="#" class="price-btn">$1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Mt Kenya</span>
							<a href="#" class="price-btn">$1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Samburu</span>
							<a href="#" class="price-btn">$1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Zanzibar</span>
							<a href="#" class="price-btn">$1500</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-price">
					<h4> Packages</h4>
					<ul class="price-list">
						<li class="d-flex justify-content-between align-items-center">
							<span>Nairobi</span>
							<a href="#" class="price-btn">$1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Rift Valley</span>
							<a href="#" class="price-btn">$1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Coast</span>
							<a href="#" class="price-btn">$1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Mt Kenya</span>
							<a href="#" class="price-btn">$1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Samburu</span>
							<a href="#" class="price-btn">$1500</a>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Zanzibar</span>
							<a href="#" class="price-btn">$1500</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="contact-page-area section-gap">
	<div class="container">
		<div class="page-header">
<h2 class="text-center text-success">Contact Us:</h2>
		</div>
		<hr>
		<div class="row">

			<div class="col-lg-4 d-flex flex-column address-wrap">
				<br>
				<br>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-home"></span>
					</div>
					<div class="contact-details">
						<h5>Nairobi,Kenya</h5>
						<p>
							00200-2972 Magadi Road
						</p>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-phone-handset"></span>
					</div>
					<div class="contact-details">
						<h5>(+254)705327041</h5>
						<p>Mon to Fri 24hrs</p>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-envelope"></span>
					</div>
					<div class="contact-details">
						<h5>camping.toursandsafaris@gmail.com</h5>
						<p>Send us your query anytime!</p>
					</div>
				</div>
			</div>

			<div class="col-lg-8">
				<form name="enquiry" method="post">
		 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
	<p style="width: 350px;">

	<div class="col-lg-8 form-group">
	<b>Full name</b>  <input type="text" name="fname" class="form-control" id="fname" placeholder="Full Name" required="">
	</p>
<p>
<b>Email</b>  <input type="email" name="email" class="form-control" id="email" placeholder="Valid Email id" required="">
	</p>

	<p>
<b>Mobile No</b>  <input type="text" name="mobileno" class="form-control" id="mobileno" maxlength="10" placeholder="10 Digit mobile No" required="">
	</p>

	<p>
<b>Subject</b>  <input type="text" name="subject" class="form-control" id="subject"  placeholder="Subject" required="">
	</p>

</div>

<div class="col-lg-8 form-group">

	<p>
<b>Description</b>  <textarea name="description" class="form-control" rows="6" cols="50" placeholder="Description" required=""></textarea>
	</p>
</div>
			<p style="padding-left: 15px;">
<button type="submit" name="submit1" class="btn-primary btn">Submit</button>
			</p>
			</form>
			</div>
		</div>
	</div>
</section>





<footer class="footer-area section-gap">
	<div class="container">

		<div class="row">
			<div class="col-lg-3  col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>About Agency</h6>
					<p>
						We have a team of well experienced and trained drivers/tour guides who will go out of their way to give you an enjoyable safaris and holidays. Our office staff will help you with all the inquiries and information that you require to process your bookings in time . All questions whether historical , tribal, geographical will be addressed.
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>Navigation Links</h6>
					<div class="row">
						<div class="col">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">Feature</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Portfolio</a></li>
							</ul>
						</div>
						<div class="col">
							<ul>
								<li><a href="#">Team</a></li>
								<li><a href="#">Pricing</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3  col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>Newsletter</h6>
					<p>
						To recieve newsletters and the latest notifi
					</p>
					<div id="mc_embed_signup">
						<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
							<div class="input-group d-flex flex-row">
								<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
								<button class="btn bb-btn"><span class="lnr lnr-location"></span></button>
							</div>
							<div class="mt-10 info"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-3  col-md-6 col-sm-6">
				<div class="single-footer-widget mail-chimp">
					<h6 class="mb-20">InstaFeed</h6>
					<ul class="instafeed d-flex flex-wrap">
						<li><img src="img/i1.jpg" alt=""></li>
						<li><img src="img/i2.jpg" alt=""></li>
						<li><img src="img/i3.jpg" alt=""></li>
						<li><img src="img/i4.jpg" alt=""></li>
						<li><img src="img/i5.jpg" alt=""></li>
						<li><img src="img/i6.jpg" alt=""></li>
						<li><img src="img/i7.jpg" alt=""></li>
						<li><img src="img/i8.jpg" alt=""></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row footer-bottom d-flex justify-content-between align-items-center">
			<p class="col-lg-8 col-sm-12 footer-text m-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Camping Trailke | All rights reserved
									</p>
			<div class="col-lg-4 col-sm-12 footer-social">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
		</div>
	</div>
</footer>
<!-- End footer Area -->

<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/jquery-ui.js"></script>
	<script src="js/easing.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/main.js"></script>
</body>
</html>
