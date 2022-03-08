<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require __DIR__ . '/lib/__init__.php';

use lib\app\widgets\NavBarWidget;

$navBar = new NavBarWidget(null);
if (isset($_SESSION['id'])) {
    $navBar = new NavBarWidget($_SESSION['id']);
}

$edit = false;
$add = false;
$submit = false;
$id = 0;
if (isset($_POST['action'])) {
    $edit = $_POST['action'] == 'edit';
    $add = $_POST['action'] == 'add';
    $submit = $_POST['action'] == 'submit';
    if ($edit) {
        $id = $_POST['id'];
    }
    if ($submit) {
        $params = new \lib\domain\params\CreateProductParams(
            $_POST['name'],
            $_POST['description'],
            $_POST['items'],
            $_POST['price']
        );
        $creator = \lib\WaterStation::instance()->createProductUseCase;
        $result = $creator($params);
    }
}

$productLoader = \lib\WaterStation::instance()->loadProductListUseCase;
$products = $productLoader(new \lib\domain\params\LoadProductListParams());

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Products</title>
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
    <link href="css/product-styles.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <?php echo $navBar->build(2) ?>
    <!-- Navbar End -->


    <main class="container" role="main">
        <h1>Products <?php echo isset($_SESSION['id']) ?'<a href="product-add.php"><span class="btn btn-success">Add Products</span></a>' : ''; ?></h1>
        <?php
        echo $add ? (new \lib\app\widgets\ProductWidget(null))->editMode() : "";

        foreach ($products as $product) {
            echo (new \lib\app\widgets\ProductWidget($product))->build($edit && $id == $product->id, isset($_SESSION['id']));
        }

        ?>
        <h1><span class="btn btn-warning">Inquire Now!</span></h1>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <h3>FGB 888 MISSION</h3>
            <p>"To provide a high-quality purified drinking water that will ensure the customer's safety and satisfaction."</p>
            <ul class="socials">
                <li><a href="http://www.facebook.com/"><i class="gg-facebook"></i></a></li>
                <li><a href="https://twitter.com/"><i class="gg-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/"><i class="gg-instagram"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2020 <span> FGB 888 </span></p>
        </div>
    </footer>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!---->
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