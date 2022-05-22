<?php
session_start();

require __DIR__ . '/lib/__init__.php';

use lib\domain\params\LoginParams;
use lib\WaterStation;

if (isset($_POST['submit'])) {
    $update = WaterStation::instance()->updatePasswordUseCase;
    $params = new \lib\domain\params\UpdatePasswordParams(
        $_POST['code'],
        $_POST['password']
    );
    $result = $update($params);
    echo $result->username;
    if (!$result) {
        $_SESSION['error4'] = true;
        $_SESSION['err_msg4'] = 'e-mail does not match any account';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/adminlog.css"/>
    <title>Password Changed</title>

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
        <h3  class="animate__animated animate__bounceInDown">Success</h3>
        <p class="animate__animated animate__bounceInDown animate__delay-1s ">You have successfully updated your password</p>
    </div>
    <form action="login.php" method="post">

        <div class="btn">
            <button class="animate__animated animate__bounceInUp animate__delay-2s">Continue to Login</button>
        </div>

    </form>
</div>
</body>
</html>
