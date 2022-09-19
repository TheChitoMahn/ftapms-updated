<?php

if(isset($_POST["scoresheet-edit"])) {
    require_once '../php/sidebar.php';

    $scr_id = $_POST["id"];

    $scr_orgname = $_POST["scr-orgname"];
    $scr_address = $_POST["scr-address"];
    $scr_contact = $_POST["scr-contact"];
    $scr_email = $_POST["scr-email"];
    $scr_phone = $_POST["scr-phone"];
    $scr_das = $_POST["scr-das"];
    $scr_cob = $_POST["scr-cob"];
    $scr_str = $_POST["scr-str"];
    $scr_cap = $_POST["scr-cap"];
    $scr_rsk = $_POST["scr-rsk"];
    $scr_smry = $_POST["scr-smry"];

    require_once 'dbh.inc.php';
    
    $sql = "UPDATE scoresheet SET orgname=?, address=?, p_contact=?, p_email=?, p_phone=?, dateofassessment=?, carriedoutby=?, strategic=?, capacity=?, risk=?, summary=?
            WHERE id =?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        if ($_SERVER['REQUEST_URI'] === "/FTA_Partners_System/includes/scoresheetEDIT.inc.php") {
            echo '<meta http-equiv="Refresh" content="0.0; url=../php/listofass.php?error=goneBack2">';
            exit();
        }
    }

    mysqli_stmt_bind_param($stmt, "ssssssssssss", $scr_orgname, $scr_address, $scr_contact, $scr_email, $scr_phone, $scr_das, $scr_cob, $scr_str, $scr_cap, $scr_rsk, $scr_smry, $scr_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    if ($_SERVER['REQUEST_URI'] === "/FTA_Partners_System/includes/scoresheetEDIT.inc.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listofass.php?error=successSCRupdate">';
        exit();
    }

}else {
    if ($_SERVER['REQUEST_URI'] === "/FTA_Partners_System/includes/scoresheetEDIT.inc.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listofass.php?error=goneBack1">';
        exit();
    }
}