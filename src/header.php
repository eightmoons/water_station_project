<?php
if (isset($_SESSION['uid'])) {
    require_once "db.php";
    $conn = new mysqli($servername, $username, $password, $db);

    $sql = "SELECT * FROM ws_users WHERE id={$_SESSION['uid']}";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $current_user = $row['username'];
        }
    }
    else {
        unset($_SESSION['uid']);
    }
}
?>

<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img class="logo" src="img/fgblogo.png"> FGB 888 Water Refilling Station </img>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link <?php echo $index_active ?>" >Home</a>
                <a href="products.php" class="nav-item nav-link <?php echo $products_active ?>">Products</a>
                <a href="tutorials.php" class="nav-item nav-link <?php echo $tutorials_active ?>">Tutorials</a>
                <a href="aboutus.php" class="nav-item nav-link <?php echo $about_active ?>">About Us</a>
				<a href="contacts.php" class="nav-item nav-link <?php echo $contact_active ?>">Contact</a>
                    </div>
                </div>
                <?php 
                if (isset($current_user)) {
                    echo '
                    <div class="dropdown
                    ">
                    <a class="nav-item nav-link">'. $current_user . '</button>
                    <div class="dropdown-content">
                        <a href="logout.php">Logout</a>
                    </div>
                    </div>
                    ';
                }
                ?>

            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Schedule Now!<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>