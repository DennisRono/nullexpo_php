<?php
include "../member/db/config.php";
$msg = "";
if (isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $result = mysqli_query($conn, "SELECT Username FROM users WHERE Email = '$email'");
    $row = mysqli_fetch_array($result);
    $username = $row['Username'];
    if($username == ""){
        $digits = 4;
        $username = "User".str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);;
    }
    $sql = "INSERT INTO subscribers(Email,Username)VALUES('$email','$username')";
    if($conn->query($sql)){
        $msg = "You have sucessfully Subscribed to nullexpo";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="message">
        <h2><?php echo $msg; ?></h2>
    </div>
</body>
</html>