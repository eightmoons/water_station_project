<?php
session_start();

require __DIR__ . '/lib/__init__.php';

use lib\app\widgets\NavBarWidget;

$navBar = new NavBarWidget(null);
if (isset($_SESSION['id'])) {
    $navBar = new NavBarWidget($_SESSION['id']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
	
	<!-- Footer -->
	<link href='https://css.gg/facebook.css' rel='stylesheet'>
	<link href='https://css.gg/twitter.css' rel='stylesheet'>
	<link href='https://css.gg/instagram.css' rel='stylesheet'>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
	<link href="css/contacts-css.css" rel="stylesheet">
</head>

<body style="background-image: url(img/productbg.jpg);">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php echo $navBar->build(5) ?>
    <!-- Navbar End -->

    <main role="main" class="container bodyy px-5">
        <h1>Contact Us</h1>
        <div class="row gx-5">
            <div class="col-md-5 col-sm-12 shadow p-3 mb-5 bg-white rounded ">
                <h2 class="mt-5 text-center">Contact Info</h2>
                <div class="row">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Landline info: </strong>79187760</li>
                        <li class="list-group-item"><strong>Cellphone info: </strong>+639165772839</li>
                        <li class="list-group-item"><strong>Email: </strong>fgbwaterrefillingstation888@gmail.com</li>
						 <li class="list-group-item"><strong>Facebook: </strong>https://bit.ly/3CLxtGx</li>
						 <li class="list-group-item"><strong>Instagram: </strong>fgb888waterstation</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-1"></div>
            <div class="col-md-5 col-sm-11 shadow p-3 mb-5 bg-white rounded align-right">
                <h2 class="mt-5 text-center">Book an appointment</h2>
				<a class="btn btn-large btn-success btn-block container px-5 booknow" href="https://forms.gle/L2G1fZSwUnJ2Vb757">Book now</a>
           
            </div>
        </div>
    </main>

	<footer>
		<div class="footer-content row text-center">
			<h3>FGB 888 MISSION</h3>
			<p>"To provide a high-quality purified drinking water that will ensure the customer's safety and satisfaction."</p>
			<ul class="socials">
				<li><a href="https://bit.ly/3CLxtGx"><i class="gg-facebook"></i></a></li>
				<li><a href="https://www.instagram.com/fgb888waterstation/?fbclid=IwAR3oREQMEqRc2pWf5_OiXLFFS9fFTKNpTTTDlp3ZMHE6rr1a4ninHQR44hY"><i class="gg-instagram"></i></a></li>
			</ul>
		</div>
		<div class="footer-bottom">
			<p>copyright &copy;2020 <span> FGB 888 </span></p>
		</div>
	</footer>
	
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>