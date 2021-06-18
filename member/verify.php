<?php
include "./sendmail/verification/mail_verification.php";
    $conn = new mysqli("localhost", "root", "", "nullexpo");

    if ($conn -> connect_error){
        die("Connection to database Failed!".$conn -> connect_error);
    }
    $Verifi = "1";
    $Email = $_GET['token'];
    $sql = "UPDATE users SET Verified = $Verifi WHERE Token = '$Email'";
    echo "<br>";
    if ($conn->query($sql)) {
        echo "Verified successfylly!";
        echo "<script> window.location.href='../index.php' </script>";
        $_SESSION['logged_in'] = true;
        exit();
    } else {
        echo "Failed to verify!";
    }
?>