<?php
    include "./db/config.php";
    include "./sendmail/verification/forgot_email.php";
    $msg = "";
    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        function generatecode($digits){
            return str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
        }
        $code = generatecode(5);
        $sql = "UPDATE users SET Code = $code WHERE Email = '$email'";
        if($conn->query($sql)){
            sendmail($email,$code);
        }
        $msg = $code;
        
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
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../assets/images/favicon_io/site.webmanifest">
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
    <div class="logincontainer" style="height: 100vh !important;">
        <div class="loginbox">
            <div class="imgbox">
                <img src="../assets/images/lock-screen.png" alt="image">
            </div>
            <div class="loginform">
                <h2>Reset</h2>
                <div class="message">
                    <h4><?php echo $msg; ?></h4>
                </div>
                <p>please enter your email address</p>
                <form action="forgot.php" method="POST">
                    <label for="email">Email adress</label><br>
                    <input type="email" placeholder="email address" name="email"><br>
                    <span>
                    <!-- <input type="checkbox" class="vs-checkbox"> -->
                    <!-- <span>Remember me</span> --> <span><a href="./login.php">Back to Login?</a></span>
                    </span>
                    <br>
                    <input type="submit" name="submit" class="buttonone" value="Request Password Reset" style="text-align:center;">
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