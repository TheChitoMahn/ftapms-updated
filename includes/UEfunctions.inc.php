<?php
require_once 'nptfunctions.inc.php';
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

function updateNDA($conn, $date, $name, $partner, $proposal, $delivery, $termination, $country, $time, $timelimit, $goals, $w_name, $w_designation, $w_address, $fta_name, $id, $RLname, $action) {
    $sql = "UPDATE nda SET date=?, name=?, partner=?, proposal=?, delivery=?, termination=?, country=?, time=?, timelimit=?, goals=?, w_name=?, w_designation=?, w_address=?, fta_name=?
            WHERE id=? ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/NDAedit.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssssssssssss", $date, $name, $partner, $proposal, $delivery, $termination, $country, $time, $timelimit, $goals, $w_name, $w_designation, $w_address, $fta_name, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    successIDs($conn, $RLname, $action, $id);
    // header("location: ../php/listNDA.php?error=successNDAedit");
    exit();
}

function updateMOU($conn, $orgname, $moudate, $preamble, $whereas, $whereas2, $article1, $article2, $article3, $article31, $article32, $article4, $article5, $article6, $article7, $article8, $contacts, $article9, $article10, $article11, $article12, $article13, $article14, $sign, $id, $RLname, $action){
    $sql = "UPDATE mou SET orgname=?, moudate=?, preamble=?, whereas=?, whereas2=?, article1=?, article2=?, article3=?, article31=?, article32=?, article4=?, article5=?, article6=?, article7=?, article8=?, contacts=?, article9=?, article10=?, article11=?, article12=?, article13=?, article14=?, sign=?
            WHERE id=? ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/MOUedit.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssss", $orgname, $moudate, $preamble, $whereas, $whereas2, $article1, $article2, $article3, $article31, $article32, $article4, $article5, $article6, $article7, $article8, $contacts, $article9, $article10, $article11, $article12, $article13, $article14, $sign, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    successIDs($conn, $RLname, $action, $id);
    // header("location: ../php/listMOU.php?error=successMOUupdated");
    exit();
}