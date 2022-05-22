<?php

session_start();

require __DIR__ . '/lib/__init__.php';

use lib\domain\params\LoginParams;
use lib\WaterStation;

if (isset($_SESSION['id'])) {
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
    <title>Invalid Link</title>

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
        <h3  class="animate__animated animate__bounceInDown">Error</h3>
        <p class="animate__animated animate__bounceInDown animate__delay-1s ">The password reset link is invalid</p>
    </div>
    <form action="index.php" method="post">

        <div class="btn">
            <button class="animate__animated animate__bounceInUp animate__delay-2s">Return to Index</button>
        </div>

    </form>
</div>
</body>
</html>