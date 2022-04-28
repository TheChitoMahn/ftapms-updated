<?php

if (isset($_POST["login-submit"])) {
    
    $logincompanyemail = $_POST["lgcompanyemail"];
    $loginpassword = $_POST["lgpassword"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($logincompanyemail, $loginpassword) !== false) {
        header("location: ../index.php?error=emptyInput");
        exit();
    }

    loginUser($conn, $logincompanyemail, $loginpassword);

}
else {
    header("location: ../index.php");
    exit();
}