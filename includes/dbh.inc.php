<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "Joab5081!";
$dbname = "fta pms";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (!function_exists('sanitize_input')) {
    function sanitize_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }    
}

?>