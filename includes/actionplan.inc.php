<?php

if (isset($_POST["ap-submit"])) {
    require_once '../php/sidebar.php';
    require_once 'dbh.inc.php';

    $orgname = sanitize_input($_POST["OrganaizatoinName"]);
    $activity = sanitize_input(trim($_POST["activity"]));
    $endate = $_POST["endDate"];
    $RLname = $_SESSION["fullname"];
    $action = "Created an Action Plan at ";

    require_once 'nptfunctions.inc.php';

    $sql = "INSERT INTO actionplan (orgname, activity, date) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/actionplan.php?error=goneBack2");
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "sss", $orgname, $activity, $endate);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    successnotify($conn, $RLname, $action);
    exit();

}else {
    header("location: ../php/actionplan.php?error=goneBack1");
    exit();
}
?>