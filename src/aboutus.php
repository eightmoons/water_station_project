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
    <title>About Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


	<!-- Footer -->
	<link href='https://css.gg/facebook.css' rel='stylesheet'>
	<link href='https://css.gg/twitter.css' rel='stylesheet'>
	<link href='https://css.gg/instagram.css' rel='stylesheet'>
	
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	<link href="css/contacts-css.css" rel="stylesheet">
	<link href="css/aboutus.css" rel="stylesheet">

    
    <link href="css/navbar.css" rel="stylesheet">
</head>

<body style="background-image: url(img/productbg.jpg);">

    <!-- Navbar Start -->
    <?php echo $navBar->build(4) ?>
    <!-- Navbar End -->

        
		
		
		
		
		
		<head>
	<title>About Us Section</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="css/contacts-css.css" rel="stylesheet">
</head>	
<body style="background-image: url(img/productbg.jpg);">
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>About Us</h1>
				</div>
				<div class="content">
					<h3>What We Do is More than a business</h3>
					<p>The water industry remains to be one of the most vital industries globally. 
					It isn’t just that water is a commodity; it’s life. Recognizing the growing need for sustainability and clean, drinkable water</p>
					
					<p>FGB 888 systems offers that caters to entrepreneurs who are not only able to maximize 
					in the long run, but also consume less energy and produce zero water waste.</p>
				</div>
				<div class="social">
					<a href="https://bit.ly/3CLxtGx"><i class="fab fa-facebook-f"></i></a>
					<a href="https://www.instagram.com/fgb888waterstation/?fbclid=IwAR3oREQMEqRc2pWf5_OiXLFFS9fFTKNpTTTDlp3ZMHE6rr1a4ninHQR44hY"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="image-section">
				<img src="img/waterearth.jpg">
			</div>
		</div>
	</div>

	

		
		
	
		
		
		
		
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