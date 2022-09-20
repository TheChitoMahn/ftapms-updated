<?php

if(isset($_POST["checklist-edit"])) {
    require_once '../php/sidebar.php';

    $chk_id = $_POST["id"];

    $chk_orgname = $_POST["chk-orgname"];
    $chk_bg = $_POST["chk-bg"];
    $chk_fstand = $_POST["chk-fstand"];
    $chk_governace = $_POST["chk-governace"];
    $chk_snp = $_POST["chk-snp"];
    $chk_cov = $_POST["chk-cov"];
    $chk_aot = $_POST["chk-aot"];
    $chk_obligation = $_POST["chk-obligation"];
    $chk_lowrisk = $_POST["chk-lowrisk"];
    $chk_sufficient = $_POST["chk_sufficient"];
    $chk_management = $_POST["chk-management"];
    $chk_ftapers = $_POST["chk-ftapers"];

    require_once 'dbh.inc.php';
    
    $sql = "UPDATE ddchecklist SET orgname=?, bginfo=?, financeSTD=?, Governance=?, two=?, three=?, four=?, five=?, six=?, funding=?, management=?, eight=?
            WHERE id =?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        if ($_SERVER['REQUEST_URI'] === "/includes/ddEDIT.inc.php") {
            echo '<meta http-equiv="Refresh" content="0.0; url=../php/listofass.php?error=goneBack2">';
            exit();
        }
    }

    mysqli_stmt_bind_param($stmt, "sssssssssssss", $chk_orgname, $chk_bg, $chk_fstand, $chk_governace, $chk_snp, $chk_cov, $chk_aot, $chk_obligation, $chk_lowrisk, $chk_sufficient, $chk_management, $chk_ftapers, $chk_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    if ($_SERVER['REQUEST_URI'] === "/includes/ddEDIT.inc.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listofass.php?error=successDDupdate">';
        exit();
    }

}else {
    if ($_SERVER['REQUEST_URI'] === "/includes/ddEDIT.inc.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listofass.php?error=goneBack1">';
        exit();
    }
}