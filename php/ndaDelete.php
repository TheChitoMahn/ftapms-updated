<?php

if (isset($_GET['id'])) {
    require_once 'sidebar.php';
    include "../includes/dbh.inc.php";

    $id = sanitize_input($_GET['id']);
    $RLname = $_SESSION["fullname"];
    $action = "deleted an NDA Agreement at ";

    require_once '../includes/nptfunctions.inc.php';

    $sql = "DELETE FROM nda WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: ../php/listNDA.php?error=goneBack1");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    successIDs($conn,$RLname, $action, $id);
    // header("Location: ../php/listNDA.php?error=successDelete");
    exit();

}else {
    header("Location: ../php/listNDA.php?error=goneBack2");
}