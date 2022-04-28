<?php

if (isset($_GET['id'])) {
    require_once 'sidebar.php';
    require_once "../includes/dbh.inc.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);
    $RLname = $_SESSION["fullname"];
    $action = "deleted an Agreement at ";

    require_once '../includes/nptfunctions.inc.php';

    $sql = "DELETE FROM alert WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: ../php/listpartner.php?error=goneBack1");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    successIDs($conn,$RLname, $action, $id);
    exit();

    // $result = mysqli_query($conn, $sql);

    // if ($result) {
    //     successnotify($conn, $RLname, $action);
    //     header("Location: ../php/agreementSCHD.php?error=successDelete");
    // }else {
    //     header("Location: ../php/listpartner.php?error=goneBack1");
    // }

}else {
    header("Location: ../php/listpartner.php?error=goneBack2");
}