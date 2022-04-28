<?php

function emptyInputSignup($fullname, $companyemail, $department, $password, $confirmpassword) {
    $result = null;
    if (empty($fullname) || empty($companyemail) || empty($department) || empty($password) || empty($confirmpassword)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidName($fullname) {
    $result = null;
    if (preg_match("/^[a-zA-Z0-9]*$/", $fullname)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidCompanyEmail($companyemail) {
    $result = null;
    $domains = array('fairtradeafrica.co.ke', 'fairtradeafrica.com', 'fairtradeafrica.net');
    $pattern = "/^[a-z0-9._%+-]+@([a-z0-9.-]+.)*(" . implode('|', $domains) . ")$/i";
    if (!preg_match($pattern, $companyemail)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $confirmpassword) {
    $result = null;
    if ($password !== $confirmpassword) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function emptyInputLogin($logincompanyemail, $loginpassword) {
    $result = null;
    if (empty($logincompanyemail) || empty($loginpassword)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function updateUser($conn, $fullname, $companyemail, $department, $password, $id) {
    $sql = "UPDATE users_approved SET fullname=?, companyemail=?, department=?, password=? 
            WHERE id=? ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/userEdit?error=stmtFailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $fullname, $companyemail, $department, $hashedPassword, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../php/listusers.php?error=successUserUpdate");
    exit();
}