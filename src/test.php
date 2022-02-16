<?php

include "db.php";

$conn = new mysqli($servername, $username, $password, $db);
$uname = "admin";
$pawd = "admin";
echo  "SELECT * FROM `ws_users` WHERE username='" .$uname. "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if ($row['password'] == $pawd) {
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

