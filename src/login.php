<?php
session_start();

if (!isset($_SESSION['uid'])) {
  if (isset($_POST['submit'])) {
    require_once "db.php";
    $conn = new mysqli($servername, $username, $password, $db);

    $sql = "SELECT * FROM `ws_users` WHERE username=`" . $_POST['username'] . "`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          if ($row['password'] == $_POST['password']) {
            $current_user = $row['username'];
            $_SESSION['uid'] = $row['id'];
            header("Location: index.php");
            exit;
          }
          else {
            $success = false;
          }
        }
    }
    else {
        unset($_SESSION['uid']);
    } 
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
          <input type="text" placeholder="Username" name="username" />
        </div>
        <div class="pass animate__animated animate__fadeInUpBig animate__delay-1s">
          <i class="bx bxs-lock-alt"></i>
          <input type="password" placeholder="Password" name="password" />
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