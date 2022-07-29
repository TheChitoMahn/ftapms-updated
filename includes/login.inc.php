<?php

if (isset($_POST["login-submit"])) {

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    $logincompanyemail = sanitize_input($_POST["lgcompanyemail"]);
    $loginpassword = sanitize_input($_POST["lgpassword"]);

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