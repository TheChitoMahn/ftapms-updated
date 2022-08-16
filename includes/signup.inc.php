<?php

if (isset($_POST["signup-submit"]) && $_POST['g-recaptcha-response'] != "") {

    $secret = '6LcbRakfAAAAACIphaUD1mqlQ5gGGM9rWgucsRLk';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {

        require_once 'dbh.inc.php';

        $fullname = sanitize_input($_POST["fullname"]);
        $companyemail = $_POST["companyemail"];
        $department = sanitize_input($_POST["department"]);
        $password = sanitize_input($_POST["password"]);
        $confirmpassword = sanitize_input($_POST["confirmpassword"]);
    
        require_once 'functions.inc.php';
    
        if (emptyInputSignup($fullname, $companyemail, $department, $password, $confirmpassword) !== false) {
            header("location: ../index.php?error=emptyInputSI");
            exit();
        }
        if (invalidName($fullname) !== false) {
            header("location: ../index.php?error=invalidName");
            exit();
        }
        if (invalidCompanyEmail($companyemail) !== false) {
            header("location: ../index.php?error=invalidCompanyEmail");
            exit();
        }
        if (passwordMatch($password, $confirmpassword) !== false) {
            header("location: ../index.php?error=passwordDontMatch");
            exit();
        }
        if (companyEmailExists($companyemail, $conn) !== false) {
            header("location: ../index.php?error=companyEmailAlreadyExists");
            exit();
        }
    
        createUser($conn, $fullname, $companyemail, $department, $password);
    }

}else {
    header("location: ../index.php?error=recap");
    exit();
}