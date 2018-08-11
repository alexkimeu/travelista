<?php
session_start();
error_reporting(0);
include('config.php');
if(isset($_POST['submit2']))
{
$pid=intval($_GET['pkgid']);
$useremail=$_SESSION['login'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$comment=$_POST['comment'];
$status=0;
$sql="INSERT INTO tblbooking(PackageId,UserEmail,FromDate,ToDate,Comment,status) VALUES(:pid,:useremail,:fromdate,:todate,:comment,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':comment',$comment,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Booked Successfully";
header('location:hotel-history.php');

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
<title>Hotel Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
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
<link href="css/style.css" rel='stylesheet' type='text/css' />



<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

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


<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css" />
	<script>
		 new WOW().init();
	</script>
<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>



					<body>
						<header id="header">
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
												<li class="menu-has-children"><a href="">Bookings</a>
													<ul>
														<li><a href="tour-history.php">Tours</a></li>
														<li><a href="hotel-history.php">Hotels</a></li>
														<li><a href="vehicle-history.php">Vehicles</a></li>
													</ul>
												</li>
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

<!--- /banner ---->
<!--- selectroom ---->
<div class="selectroom">
	<div class="container">
		  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
<?php
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tblhotels where PackageId=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

<form name="book" method="post">
		<div class="selectroom_top">
			<div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
			</div>
			<div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
				<h2><?php echo htmlentities($result->PackageName);?></h2>
				<p class="dow">Hotel-<?php echo htmlentities($result->PackageId);?></p>
				<p><b>Hotel Type :</b> <?php echo htmlentities($result->PackageType);?></p>
				<p><b>Hotel Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
					<div class="ban-bottom">
				<div class="bnr-right">
				<label class="inputLabel">From</label>
				<input class="date" id="datepicker" type="text" placeholder="dd-mm-yyyy"  name="fromdate" required="">
			</div>
			<div class="bnr-right">
				<label class="inputLabel">To</label>
				<input class="date" id="datepicker1" type="text" placeholder="dd-mm-yyyy" name="todate" required="">
			</div>
			</div>
						<div class="clearfix"></div>
				<div class="grand">
					<p>Grand Total</p>
					<h3>USD.800</h3>
				</div>
			</div>
		<h3>Hotel Details</h3>
				<p style="padding-top: 1%"><?php echo htmlentities($result->PackageDetails);?> </p>
				<div class="clearfix"></div>
		</div>

		<br>
		<div class="selectroom_top">
			<div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
				<ul>
<br>
<br>
					<li class="spe">
						<label class="inputLabel">Comment</label>
						<input class="special" type="text" name="comment" required="">
					</li>
					<?php if($_SESSION['login'])
					{?>
						<li class="spe" align="center">
					<button type="submit" name="submit2" class="btn-primary btn col-lg-2">Book</button>
						</li>
						<?php } else {?>
							<li class="sigi" align="center" style="margin-top: 1%">
							<a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn" > Book</a></li>
							<?php } ?>
					<div class="clearfix"></div>
				</ul>
			</div>

		</div>
		</form>
<?php }} ?>


	</div>
</div>

</body>
</html>
