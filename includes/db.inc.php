<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "dev_tanvirmahincse18";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("DB connection faild".mysqli_connect_error());
}