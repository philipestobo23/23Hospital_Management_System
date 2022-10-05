<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://kit.fontawesome.com/46cf979321.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
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
                <br>
                <span>
                <i class="fa fa-lock"></i>
                <input type="password" placeholder="Enter Password" name="password" id="password" required>
                </span>
                <br>
                <br>
                <button class="button_login" type="submit" name="login" id="login">Login</button>


                <br>
                <br>
                <div class="container" style="background-color:#f1f1f1">
                    <span class="password">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>

    </div>

</body>

</html>