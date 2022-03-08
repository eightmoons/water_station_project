<?php

session_start();

require __DIR__ . '/lib/__init__.php';

use lib\domain\params\LoginParams;
use lib\WaterStation;


$error = false;
if (!isset($_SESSION['id'])) {
    if (isset($_POST['submit'])) {
        $auth = WaterStation::instance()->loginUseCase;
        $params = new LoginParams(
            $_POST['username'],
            $_POST['password']
        );
        $uid = $auth($params);
        if (!is_null($uid)) {
            $_SESSION['id'] = $uid->id;
            header("Location: index.php");
            exit;
        }
        else {
            $error = true;
        }
    }
} else {
    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/adminlog.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Admin Login</title>
	
</head>
<body>
	<div class="container">
    <img src="img/fgblogo.png">
      <div class="top-header">
        <h3  class="animate__animated animate__bounceInDown">Administrator Login</h3>
        <p class="animate__animated animate__bounceInDown animate__delay-1s ">Please enter your login credentials to access the website</p>
      </div>
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="user animate__animated animate__fadeInUpBig animate__delay-1s">
          <i class="bx bxs-user-circle"></i>
          <input type="text" placeholder="Username" name="username" required/>
        </div>
        <div class="pass animate__animated animate__fadeInUpBig animate__delay-1s">
          <i class="bx bxs-lock-alt"></i>
          <input type="password" placeholder="Password" name="password" required />
        </div>
        <div class="btn">
        <button class="animate__animated animate__bounceInUp animate__delay-2s" name="submit" >Login</button>
      </div>
      <?php 
      if (isset($success)) {
        if (!$success) {
          echo "invalid username/password";
        }
      }
      ?>
      </form>

    </div>
	
</body>
</html>