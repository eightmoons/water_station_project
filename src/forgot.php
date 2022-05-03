<?php

session_start();

require __DIR__ . '/lib/__init__.php';

use lib\domain\params\LoginParams;
use lib\WaterStation;

$error = false;
if (!isset($_SESSION['id'])) {
    if (isset($_POST['submit'])) {
        $forgot = WaterStation::instance()->forgotPasswordUseCase;
        $params = new \lib\domain\params\ForgotPasswordParams(
            $_POST['username']
        );
        $result = $forgot($params);
        if (!$result) {
            $_SESSION['error'] = true;
            $_SESSION['err_msg'] = 'e-mail does not match any account';
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
    <title>Admin Login</title>

</head>
<body>
<script>
    if(window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<div class="container">
    <img src="img/fgblogo.png">
    <div class="top-header">
        <h3  class="animate__animated animate__bounceInDown">Forgot Password</h3>
        <p class="animate__animated animate__bounceInDown animate__delay-1s ">Please enter your email address to continue</p>
    </div>
    <form action="forgot.php" method="post">
        <div class="user animate__animated animate__fadeInUpBig animate__delay-1s">
            <i class="bx bxs-user-circle"></i>
            <input type="email" placeholder="E-mail Address" name="username" required/>
        </div>
        <div class="btn">
            <button class="animate__animated animate__bounceInUp animate__delay-2s" name="submit" >Submit</button>
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