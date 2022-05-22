<?php

session_start();

require __DIR__ . '/lib/__init__.php';

use lib\domain\params\LoginParams;
use lib\WaterStation;

$error = false;
if (!isset($_SESSION['id'])) {
    if (isset($_GET['code']) ) {
        $verify = WaterStation::instance()->verifyLinkUseCase;
        $params = new \lib\domain\params\VerifyLinkParams(
            $_GET['code']
        );
        $result = $verify($params);
        if ($result) {
            $_SESSION['verif'] = 1;
        }
        else {
            header("Location: invalid.php");
            exit;
        }
    }
    else {
        header("Location: index.php");
        exit;
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
<script>
    if(window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<div class="container">
    <img src="img/fgblogo.png">
    <div class="top-header">
        <h3  class="animate__animated animate__bounceInDown">Password Reset</h3>
        <p class="animate__animated animate__bounceInDown animate__delay-1s ">Please enter your new password</p>
    </div>
    <form action="change_pass.php" method="post">
        <div class="user animate__animated animate__fadeInUpBig animate__delay-1s">
            <i class="bx bxs-user-circle"></i>
            <input type="password" placeholder="Password" name="password" required/>
            <input type="hidden" value="<?php echo $_GET['code'] ?>" name="code">
        </div>
        <div class="btn">
            <button class="animate__animated animate__bounceInUp animate__delay-2s" name="submit" >Submit</button>
        </div>
    </form>
    <?php
    if (isset($_SESSION['err_msg2'])) {
        echo $_SESSION['err_msg2'];
    }

    ?>
</div>
</body>
</html>