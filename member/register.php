<?php
include "./db/config.php";
require "./rand.php";
include "./sendmail/verification/mail_verification.php";
use Utils\RandomStringGenerator;
$msg = "";
if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    if($password != $cpassword){
        $msg = "passwords did not match!";
    }
    $select = mysqli_query($conn, "SELECT Email From users WHERE Email = '$email'") or exit(mysqli_error($conn));
    if(mysqli_num_rows($select)){
        $msg = "This email is already being used by another account!";
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $generator = new RandomStringGenerator;
        $tokenLength = 32;
        $token = mysqli_real_escape_string($conn, $generator->generate($tokenLength));
        $verifi = 0;
        $sql = "INSERT INTO users(Username,Email,Password,Token,Verified)VALUES('$username','$email','$password','$token','$verifi')";
        if($conn->query($sql)){
            $msg = "success!";
            sendmail($email,$token);
            $msg = "account created successfully";
            $msg = "we have sent you an email to verify your account!";        
            //echo '<script>window.location.href="../index.php";</script>';
        } else {
            $msg = "Something wrong happened! Please retry";
            die();
            echo '<script>window.location.href="./register.php";</script>';
        }
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
                <form action="register.php" method="POST">
                    <div class="message">
                        <h6><?php echo $msg; ?></h6>
                        <br>
                    </div>
                    <label for="username">Username</label><br>
                    <input type="text" placeholder="Username" name="username" required><br>
                    <label for="email">Email adress</label><br>
                    <input type="email" placeholder="email address" name="email" required><br>
                    <label for="password">Password</label><br>
                    <input type="password" placeholder="password..." name="password" required><br>
                    <label for="password">Confirm Password</label><br>
                    <input type="password" placeholder="confirm password..." name="cpassword" required><br>
                    <span>
                    <!-- <input type="checkbox" class="vs-checkbox"> -->
                    <!-- <span>Remember me</span> <span><a href="./forgot.html">Forgot password?</a></span> -->
                    </span>
                    <input class="buttonone" type="submit" name="submit" value="Register" style="text-align:center;">
                    
                    <!-- <br>
                    <span class="acctext">Don't have an account?</span>
                    <br>
                    <button class="buttontwo">Create an account</button> -->
                </form>
                <br>
                <span class="acctext">Already have an account?</span>
                <br>
                <a href="./login.php">
                <button class="buttontwo">Login to your Account</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>