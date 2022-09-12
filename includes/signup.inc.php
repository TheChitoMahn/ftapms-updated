<?php

if (isset($_POST["signup-submit"])) {
        require_once 'dbh.inc.php';

        $fullname = sanitize_input($_POST["fullname"]);
        $companyemail = $_POST["companyemail"];
        $department = sanitize_input($_POST["department"]);
        $password = sanitize_input($_POST["password"]);
        $confirmpassword = sanitize_input($_POST["confirmpassword"]);
    
        require_once 'functions.inc.php';
    
        if (emptyInputSignup($fullname, $companyemail, $department, $password, $confirmpassword) !== false) {
            header("location: ../php/adduser.php?error=emptyInputSI");
            exit();
        }
        if (invalidName($fullname) !== false) {
            header("location: ../php/adduser.php?error=invalidName");
            exit();
        }
        if (invalidCompanyEmail($companyemail) !== false) {
            header("location: ../php/adduser.php?error=invalidCompanyEmail");
            exit();
        }
        if (passwordMatch($password, $confirmpassword) !== false) {
            header("location: ../php/adduser.php?error=passwordDontMatch");
            exit();
        }
        if (companyEmailExists($companyemail, $conn) !== false) {
            header("location: ../php/adduser.php?error=companyEmailAlreadyExists");
            exit();
        }
    
        createUser($conn, $fullname, $companyemail, $department, $password);

}else {
    header("location: ../index.php?error=recap");
    exit();
}