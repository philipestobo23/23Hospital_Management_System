<?php

if (!isset($_SESSION)) {
  session_start();
}




include_once("connections/db_connect.php");

$conn = db_connection();

if (isset($_POST['login'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM  WHERE users = '$username' AND password = '$password'";
  $user = $conn->query($sql) or die($conn->error);
  $row = $user->fetch_assoc();
  $total = $user->num_rows;

  if ($total > 0) {
    $_SESSION['UserLogin'] = $row['username']  ;
    $_SESSION['Access'] = $row['access'];

    header("location: index.php");
    exit;

    // $_SESSION['UserLogin'];
    // $_SESSION['Access'];
  }else{

    echo "NO USER REGISTERED";
  }



}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://kit.fontawesome.com/ffac59ff92.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">



</head>

<body>
    <div class="container">

        <div class="header">
            <h1>Login Form</h1>
        </div>

        <div class="login_form">
            <form action="" method="post">


                <span>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Enter Username" name="username" id="username" required>
                </span>
                <br>
              
                <span>
                <i class="fa fa-lock"></i>
                <input type="password" placeholder="Enter Password" name="password" id="password" required>
                </span>
                <br>
                <br>
                <button type="submit" name="login" id="login">Login</button>


                <br>
                <br>
                <div class="forgot_password">
                    <span class="password">Forgot <a href="#">Password?</a></span>
                </div>
            </form>
        </div>

    </div>

</body>

</html>