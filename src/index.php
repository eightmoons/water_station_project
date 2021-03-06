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
    <title>HomePage</title>
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
    <link href="css/navbar.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar Start -->
    <?php echo $navBar->build(1) ?>
    <!-- Navbar End -->
	
	<!-- Carou Start -->
	<div class="container-fluid">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="info">
                <h1 class="animate__animated animate__fadeInDownBig">FGB 888</h1>
                <p class="animate__animated animate__bounceInUp animate__delay-0.9s">Providing you clean water since 1945</p>
              </div>
          </div>
          <div class="carousel-item">
            <div class="info">
                <h1 class="animate__animated animate__fadeInDownBig">Quality Water</h1>
                <p class="animate__animated animate__fadeInUpBig animate__delay-0.9s">Our water is clean, safe, and tested.</p>
              </div>
          </div>
          <div class="carousel-item">
            <div class="info">
                <h1 class="animate__animated animate__fadeInUpBig">Open for Franchising</h1>
                <p class="animate__animated animate__fadeInLeftBig animate__delay-0.9s">Schedule and online meeting now</p>
                <a class="btn btn-outline-light btn-lg" href= "https://forms.gle/L2G1fZSwUnJ2Vb757">Schedule Now </a>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <!-- Carou End -->
  <br>
  <br>
  
  <center>
  <div class="wrapper">
      <h1>-- Did You Know? --</h1>
      <div class="about-section">
        <img src="img/waterdrop.png">
        <p>
         Water, a substance composed of the chemical elements hydrogen and oxygen and existing in gaseous, liquid, and solid states. It is one of the most plentiful and essential of compounds. A tasteless and odourless liquid at room temperature, it has the important ability to dissolve many other substances. Indeed, the versatility of water as a solvent is essential to living organisms. Life is believed to have originated in the aqueous solutions of the world???s oceans, and living organisms depend on aqueous solutions, such as blood and digestive juices, for biological processes. Water also exists on other planets and moons both within and beyond the solar system. In small quantities water appears colourless, but water actually has an intrinsic blue colour caused by slight absorption of light at red wavelengths.
          <br/>
		  <br>
        </p>
	</center>

  <section>
		<div class="container">
			<h1 class="fw-normal text-center display-4 py-3">Image Gallery</h1>
			<div class="row" id="gallery">
				<div class="col-12 col-sm-6 col-md-4 mx-auto my-3">
					<a href="img/ws1.jpg">
						<img src="img/ws1.jpg" alt="" class="img-fluid rounded">
					</a>
				</div>
				<div class="col-12 col-sm-6 col-md-4 mx-auto my-3">
					<a href="img/ws1.jpg">
						<img src="img/ws1.jpg" alt="" class="img-fluid rounded">
					</a>
				</div>
				<div class="col-12 col-sm-6 col-md-4 mx-auto my-3">
					<a href="img/ws1.jpg">
						<img src="img/ws1.jpg" alt="" class="img-fluid rounded">
					</a>
				</div>
		</div>
	</section>
<br>
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
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>