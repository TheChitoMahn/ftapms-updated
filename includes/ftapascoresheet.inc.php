<?php

if (isset($_POST["scoresheet-submit"])) {
    require_once 'dbh.inc.php';
    require_once '../php/sidebar.php';

    $orgname = sanitize_input($_POST["orgname"]);
    $address = sanitize_input($_POST["address"]);
    $p_contact = sanitize_input($_POST["p-contact"]);
    $p_contact_email = sanitize_input($_POST["p-contact-email"]);
    $p_contact_phone = sanitize_input($_POST["p-contact-phone"]);
    $dateofassessment = sanitize_input($_POST["dateofassessment"]);
    $carriedoutby = sanitize_input($_POST["carriedoutby"]);
    $strategic = $_POST["valoutput"];
    $capacity = $_POST["capoutput"];
    $risk = $_POST["riskoutput"];
    $summary = $_POST["allFNL"];
    $UID = $_POST["rand"];
    $RLname = $_SESSION["fullname"];
    $action = "has completed a FTA Partner Scoresheet Assessment ";

    require_once 'nptfunctions.inc.php';

    $sql = "INSERT into scoresheet (orgname, address, p_contact, p_email, p_phone, dateofassessment, carriedoutby, strategic, capacity, risk, summary, UID) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/ftapascoresheet.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssssssss", $orgname, $address, $p_contact, $p_contact_email, $p_contact_phone, $dateofassessment, $carriedoutby, $strategic, $capacity, $risk, $summary, $UID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    successnotify($conn, $RLname, $action);
    exit();

}else {
    header("location: ../php/ftapascoresheet.php?error=posterror");
    exit();
}