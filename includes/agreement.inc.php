<?php

if (isset($_POST["agreement-submit"])) {
    require_once '../php/sidebar.php';
    
    $orgname = $_POST["OrganaizatoinName"];
    $endate = $_POST["endDate"];
    $RLname = $_SESSION["fullname"];
    $action = "Scheduled a Partner Agreement at ";

    require_once 'dbh.inc.php';
    require_once 'nptfunctions.inc.php';

    $sql = "INSERT INTO alert (orgname, date) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/agreementSCHD.php?error=goneBack2");
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "ss", $orgname, $endate);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    successnotify($conn, $RLname, $action);
    exit();

}else {
    header("location: ../php/agreementSCHD.php?error=goneBack1");
    exit();
}
?>
<meta>