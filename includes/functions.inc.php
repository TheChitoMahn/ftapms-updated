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

function companyEmailExists($companyemail, $conn) {
    $sql = "SELECT * FROM users_approved WHERE companyemail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $companyemail);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $fullname, $companyemail, $department, $password) {
    $sql = "INSERT INTO users (fullname, companyemail, department, password) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtFailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $fullname, $companyemail, $department, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../php/sp-success.php");
    exit();
}

function updateUser($conn, $fullname, $companyemail, $department, $password, $id) {
    $sql = "UPDATE users SET fullname=?, companyemail=?, department=?, password=? 
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
    header("location: ../php/listusers?error=successUserUpdate");
    exit();
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

function loginUser($conn, $logincompanyemail, $loginpassword){
    $companyEmailExists = companyEmailExists($logincompanyemail, $conn);

    if ($companyEmailExists === false) {
        header("location: ../index.php?error=wrongLogin");
        exit();
    }

    $hashedPassword = $companyEmailExists["password"];
    $checkpassword = password_verify($loginpassword, $hashedPassword);

    if ($checkpassword === false) {
        header("location: ../index.php?error=wrongLogin");
        exit();
    }
    elseif ($checkpassword === true) {
        // session_start();
        // $_SESSION["fullname"] = $companyEmailExists["fullname"];
        // $_SESSION["department"] = $companyEmailExists["department"];
        // header("location: ../php/home-dashboard.php?error=none");
        // exit();
        $sql2 = "SELECT * FROM users_approved WHERE companyemail='$logincompanyemail' and password='$hashedPassword'";
        $result2 = mysqli_query($conn, $sql2);

        if (mysqli_num_rows($result2) > 0) {
            $rows = mysqli_fetch_assoc($result2);

            if ($rows['department'] = 'Staff') {
                header('location: ../php/home-dashboard.php?info=Stafflevel');
                session_start();
                $_SESSION["fullname"] = $companyEmailExists["fullname"];
                $_SESSION["department"] = $companyEmailExists["department"]; 

            }else if ($rows['department'] = 'Admin') {
                header('location: ../php/home-dashboard.php?info=ADMINlevel');
                session_start();
                $_SESSION["fullname"] = $companyEmailExists["fullname"];
                $_SESSION["department"] = $companyEmailExists["department"];

            }else {
                echo "<script>alert('Access Denied, Wrong Department')</script>";
                header("location: ../index.php?error=depnotallowed");
            }
            return $rows; 
        }
    }
} 