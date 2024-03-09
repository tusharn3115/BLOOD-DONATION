<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./favicon1.png" type="image/x-icon">
  <title>ADMIN LOGIN</title>
  <link rel="stylesheet" href="../adminSideCss/admin.css?v=2">

  <script>
        // prevent reload post request
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href)
        }
    </script>


</head>
<body>


  <div class="adminLogin">
<form action="" method="post">

  <h1>Admin Login</h1>

  <input type="email" name="adminEmail" id="" placeholder="Admin Email..." autocomplete="off">
  <br>

  <input type="password" name="adminPass" id="" placeholder="Admin Password..." autocomplete="off">
  <br>

  <button name="login">Log-in</button>
  
</form>
</div>

</body>
</html>



<?php

include("adminConnection.php");

if(isset($_POST['login'])){
  $query = "SELECT * FROM `adminlogin` WHERE `adminEmail` = '$_POST[adminEmail]' AND `adminPass` = '$_POST[adminPass]' ";
  $result = mysqli_query($conn,$query);
  if(mysqli_num_rows($result)==1)
  {
    session_start();
    $_SESSION['adminLoginId'] = $_POST['adminEmail'];
    header("location: adminpanel.php");
  }
  else{
    echo "<script>alert('Incorrect password');</script>";
  }
}


?>