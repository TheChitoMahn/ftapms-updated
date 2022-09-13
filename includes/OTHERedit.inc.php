<?php

if(isset($_POST["s-other-update"])) {
    require_once '../php/sidebar.php';

    $service_id = $_POST["id"];

    $service_u_name = $_POST["otheragg-name"];
    $service_u_date = $_POST["other-date"];

    require_once 'dbh.inc.php';
    
    $sql = "UPDATE other SET name=?, date=? WHERE id =?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        if ($_SERVER['REQUEST_URI'] === "/FTA_Partners_System/includes/OTHERedit.inc.php") {
            echo '<meta http-equiv="Refresh" content="0.0; url=../php/listOTHER.php?error=goneBack2">';
            exit();
        }
    }

    mysqli_stmt_bind_param($stmt, "sss", $service_u_name, $service_u_date, $service_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    if ($_SERVER['REQUEST_URI'] === "/FTA_Partners_System/includes/OTHERedit.inc.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listOTHER.php?error=successupdate">';
        exit();
    }

}else {
    if ($_SERVER['REQUEST_URI'] === "/FTA_Partners_System/includes/OTHERedit.inc.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listOTHER.php?error=posterror">';
        exit();
    }
}