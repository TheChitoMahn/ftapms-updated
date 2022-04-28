<?php

if (isset($_POST["fogo-submit"])) {

    $compemail = $_POST["compemail"];

    require_once 'dbh.inc.php';

    function invalidcompemail($compemail){
        $result = null;
        $domains = array('fairtradeafrica.co.ke', 'fairtradeafrica.com');
        $pattern = "/^[a-z0-9._%+-]+@([a-z0-9.-]+.)*(" . implode('|', $domains) . ")$/i";
        if (!preg_match($pattern, $compemail)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function sendEmail($conn, $compemail){
        $sql = "INSERT INTO fogo (compemail) VALUES (?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=stmtfogoFailed");
            exit(); 
        }

        mysqli_stmt_bind_param($stmt, "s", $compemail);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../index.php?error=fogonone");
        exit();
    }

    if (invalidcompemail($compemail) !== false) {
        header("location: ../index.php?error=invalidCompEmail");
        exit(); 
    }

    sendEmail($conn, $compemail);

}