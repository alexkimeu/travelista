<?php
session_start();
error_reporting(0);
include('config.php');
?>
<!DOCTYPE html>
  <html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Travel</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="css/linearicons.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/jquery-ui.css">
      <link rel="stylesheet" href="css/nice-select.css">
      <link rel="stylesheet" href="css/animate.min.css">
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/custom.css">

       <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
             </style>
    </head



    <body>
      <header id="header">
        <div class="header-top">
          <div class="container">
            <div class="row align-items-center">

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
              <nav id="nav-menu-container">
                  <ul class="nav-menu">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="tour-list.php">Tours</a></li>
                  <li><a href="hotel-list.php">Hotels</a></li>
                  <li><a href="vehicle-list.php">Vehicles</a></li>
                  <li><a href="logout.php">Logout</a></li>

                </ul>
              </nav><!-- #nav-menu-container -->
          </div>
        </div>
      </header><!-- #header -->
      <!-- start banner Area -->
      <section class="relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
          <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
              <h1 class="text-white">
                Bookings
              </h1>
              <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html"> Bookings</a></p>
            </div>
          </div>
        </div>
      </section>


<?php $sql = "SELECT * from tblhotels";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

	<br>
	<br>
	<div class="container">
	<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Vehicle Name: <?php echo htmlentities($result->PackageName);?></h4>
					<h6>Vehicle Type : <?php echo htmlentities($result->PackageType);?></h6>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5>USD <?php echo htmlentities($result->PackagePrice);?></h5>
					<a href="hotel-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
				</div>

				<br>
				<div class="clearfix"></div>
			</div>
</div>

<?php }} ?>





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





		</div>
	</div>
</div>

</body>
</html>
