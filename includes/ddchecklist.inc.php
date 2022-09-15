<?php

if (isset($_POST["ddchecklist-submit"])) {
    require_once 'dbh.inc.php';
    require_once '../php/sidebar.php';

    $orgname = $_POST["org"];
    $bginfo = $_POST["1a"];
    $financeSTD = $_POST["1b"];
    $Governance = $_POST["1c"];
    $two = $_POST["2"];
    $three = $_POST["3"];
    $four = $_POST["4"];
    $five = $_POST["5"];
    $six = $_POST["6"];
    $funding = $_POST["7a"];
    $management = $_POST["7b"];
    $eight = $_POST["8"];
    $RLname = $_SESSION["fullname"];
    $action = "has completed a Due Diligence Checklist Assessment ";

    require_once 'nptfunctions.inc.php';

    $sql = "INSERT into ddchecklist (orgname, bginfo, financeSTD, Governance, two, three, four, five, six, funding, management, eight) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/ddchecklist.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssssssss", $orgname, $bginfo, $financeSTD, $Governance, $two, $three, $four, $five, $six, $funding, $management, $eight);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    successnotify($conn, $RLname, $action);
    exit();

}else {
    header("location: ../php/ddchecklist.php?error=posterror");
    exit();
}