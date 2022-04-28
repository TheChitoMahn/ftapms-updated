<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "fta pms";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}