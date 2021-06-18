<?php
session_start();
$_SESSION['logged_in'] = false;
include "./db/config.php";
$msg = "";
if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $result = mysqli_query($conn, "SELECT Password FROM users WHERE Email = '$email'");
    $row = mysqli_fetch_array($result);
    if (password_verify($password, $row['Password'])) {
        $_SESSION['logged_in'] = true;
        $_SESSION['email'] = $email;
        echo '<script>window.location.href="../index.php"</script>';
    }
    else {
        $msg = "invalid credentials!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="this is a wonderful site for nullexpo">
    <meta name="author" content="Dennis Kibet">
    <meta name="email" content="nullexpo@gmail.com">
    <title>nullexpo</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-5.0.8/css/fontawesome.min.css">
</head>
<style>
.buttontwo{
                background-color: transparent !important;
                color: #7367F0;
                outline: none;
                border: 1px solid #7367F0;
                width: 100%;
                border-radius: 5px;
                padding: 10px;
                margin: 10px 0px;
                cursor: pointer;
            }
</style>
<body>
    <div class="logincontainer">
        <div class="loginbox">
            <div class="imgbox">
                <img src="../assets/images/lock-screen.png" alt="image">
            </div>
            <div class="loginform">
                <h2>Login</h2>
                <p>please login into your account</p>
                <form action="login.php" method="POST">
                    <div class="message">
                        <h6><?php  echo $msg ?></h6>
                    </div>
                    <label for="email">Email adress</label><br>
                    <input type="email" placeholder="email address" name="email" required><br>
                    <label for="password">Password</label><br>
                    <input type="password" placeholder="password..." name="password" required><br>
                    <span>
                    <!-- <input type="checkbox" class="vs-checkbox"> -->
                    <!-- <span>Remember me</span> --> <span><a href="./forgot.php">Forgot password?</a></span>
                    </span>
                    <br>
                    <input type="submit" name="submit" class="buttonone" value="Login" style="text-align:center;">
                    <!-- <br>
                    <span class="acctext">Don't have an account?</span>
                    <br>
                    <button class="buttontwo">Create an account</button> -->
                </form>
                <br>
                <span class="acctext">Don't have an account?</span>
                <br>
                <a href="./register.php">
                <button class="buttontwo">Create an account</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>