<?php

if(isset($_POST["s-other-upload"])) {
    require_once '../php/sidebar.php';

    $other_name = $_POST["otheragg-name"];
    $other_date = $_POST["other-date"];
    $other_data = file_get_contents($_FILES["signedOTHER"]["tmp_name"]);
    $other_file_name = $_FILES["signedOTHER"]["name"];

    require_once 'dbh.inc.php';
    
    $sql = "INSERT INTO other (name, date, data, file_name) values (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/AgreementGenDash.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $other_name, $other_date, $other_data, $other_file_name);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    if ($_SERVER['REQUEST_URI'] === "/includes/other.inc.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/AgreementGenDash.php?error=othersuccessupload">';
    }

}else {
    if ($_SERVER['REQUEST_URI'] === "/includes/other.inc.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/AgreementGenDash.php?error=posterror">';
    }
}