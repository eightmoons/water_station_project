<?php

session_start();

require __DIR__ . '/lib/__init__.php';

use lib\domain\params\LoginParams;
use lib\WaterStation;

if (!isset($_SESSION['trial'])) {
  $_SESSION['trial'] = 0;
}
if (isset($_SESSION['block_date'])) {
    $date1 = date_create($_SESSION['block_date']);
    $now = new DateTime('now');
    $diff = $now->getTimestamp() - $date1->getTimestamp() ;
    if ($diff >= 30) {
        unset($_SESSION['block_date']);
        unset($_SESSION['error']);
        unset($_SESSION['trial']);
        unset($_SESSION['err_msg']);
    }
}

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
            $_SESSION['error'] = true;
            if ($_SESSION['trial'] = 3) {
              $_SESSION['err_msg'] = 'Login Locked. Try again later';
              $_SESSION['block_date'] = date("Y-m-d H:i:s");
              $_SESSION['trial'] = 0;
            }
            else {
              $_SESSION['err_msg'] = 'invalid username or password';
              $_SESSION['trial'] += 1;
            }

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
    <title>Admin Login</title>
	
</head>
<body>
	<div class="container">
    <img src="img/fgblogo.png">
      <div class="top-header">
        <h3  class="animate__animated animate__bounceInDown">Administrator Login</h3>
        <p class="animate__animated animate__bounceInDown animate__delay-1s ">Please enter your login credentials to access the website</p>
      </div>
      <form action="login.php" method="post">
        <div class="user animate__animated animate__fadeInUpBig animate__delay-1s">
          <i class="bx bxs-user-circle"></i>
          <input type="text" placeholder="Username" name="username" required/>
        </div>
        <div class="pass animate__animated animate__fadeInUpBig animate__delay-1s">
          <i class="bx bxs-lock-alt"></i>
          <input type="password" placeholder="Password" name="password" required />
        </div>
        <div class="btn">
            <?php
            if (isset($_SESSION['err_msg'])) {
                if ($_SESSION['err_msg'] != 'Login Locked. Try again later') {
                    echo '<button class="animate__animated animate__bounceInUp animate__delay-2s" name="submit" >Login</button>';
                }
            }
            else {
                echo '<button class="animate__animated animate__bounceInUp animate__delay-2s" name="submit" >Login</button>';
            }
            ?>
      </div>

      </form>
        <?php
        if (isset($_SESSION['err_msg'])) {
            echo $_SESSION['err_msg'];
        }
        ?>
    </div>
	
</body>
</html>