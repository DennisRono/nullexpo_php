<?php

$conn = new mysqli("localhost", "root", "", "nullexpo");

if($conn->connect_error){
    die($conn->connect_error);
}

// $dbConnection = new PDO('mysql:dbname=dbtest;host=127.0.0.1;charset=utf8', 'user', 'password');

// $dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
// $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);