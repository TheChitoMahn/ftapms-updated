<?php

if (isset($_GET['id'])) {

include "dbh.inc.php";

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$id = validate($_GET['id']);

$sql = "SELECT * FROM users_approved WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}else {
    header("Location: ../php/userEdit.php?error=goneBack1");
}

}else if (isset($_POST["btn-edit"])) {

$id = $_POST["id"];
$fullname = $_POST["fullname"];
$companyemail = $_POST["companyemail"];
$department = $_POST["department"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];

require_once 'dbh.inc.php';
require_once 'UEfunctions.inc.php';

if (emptyInputSignup($fullname, $companyemail, $department, $password, $confirmpassword) !== false) {
    // echo '<meta http-equiv="Refresh" content="5.01; url=../php/userEdit.php?error=emptyInput">';
    header("location: ../php/userEdit.php?id=$id&error=emptyInput");
    exit();
}
if (invalidName($fullname) !== false) {
    // echo '<meta http-equiv="Refresh" content="5.01; url=../php/userEdit.php?error=invalidName">';
    header("location: ../php/userEdit.php?id=$id&error=invalidName");
    exit();
}
if (invalidCompanyEmail($companyemail) !== false) {
    // echo '<script> location.replace("../php/userEdit.php?error=invalidCompanyEmail"); </script>';
    // echo '<meta http-equiv="Refresh" content="0.01; url=../php/userEdit.php?error=invalidCompanyEmail">';
    header("location: ../php/userEdit.php?id=$id&error=invalidCompanyEmail");
    exit();
}
if (passwordMatch($password, $confirmpassword) !== false) {
    //echo '<meta http-equiv="Refresh" content="5.01; url=../php/userEdit.php?error=passwordDontMatch">';
    header("location: ../php/userEdit.php?id=$id&error=passwordDontMatch");
    exit();
}

updateUser($conn, $fullname, $companyemail, $department, $password, $id);

}else {
    echo '<meta http-equiv="Location" content="5.01; url=../php/userEdit.php?id=$id&error=goneBack2">';
    // header("location: ../php/userEdit.php?error=goneBack2");
    exit();
}