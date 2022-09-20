<?php

if(isset($_POST["s-service-upload"])) {
    require_once '../php/sidebar.php';

    $service_name = $_POST["serviceagg-name"];
    $service_date = $_POST["service-date"];
    $service_data = file_get_contents($_FILES["signedSERVICE"]["tmp_name"]);
    $service_file_name = $_FILES["signedSERVICE"]["name"];

    require_once 'dbh.inc.php';
    
    $sql = "INSERT INTO service (name, date, data, file_name) values (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/AgreementGenDash.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $service_name, $service_date, $service_data, $service_file_name);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    if ($_SERVER['REQUEST_URI'] === "/includes/service.inc.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/AgreementGenDash.php?error=successupload">';
        exit();
    }

}else {
    if ($_SERVER['REQUEST_URI'] === "/includes/service.inc.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/AgreementGenDash.php?error=posterror">';
        exit();
    }
}