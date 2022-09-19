<?php

if(isset($_POST["przz-edit"])) {
    require_once '../php/sidebar.php';

    $przz_id = $_POST["id"];
    $przz_orgname = $_POST["orgname4"];

    $dev1 = $_POST["address4"];
    $dev2 = $_POST["u-contact2"];
    $dev3 = $_POST["u-email2"];
    $dev4 = $_POST["u-phone2"];
    $dev5 = $_POST["u-das2"];
    $dev_total = $_POST["u-cob2"];

    $biz1 = $_POST["u-str2"];
    $biz2 = $_POST["u-cap2"];
    $biz3 = $_POST["u-rsk2"];
    $biz_total = $_POST["u-smry2"];

    $gov1 = $_POST["chk-ftapers1"];
    $gov2 = $_POST["przz1"];
    $gov_total = $_POST["przz2"];

    $rsk1 = $_POST["przz3"];
    $rsk2 = $_POST["przz4"];
    $rsk3 = $_POST["przz5"];
    $rsk4 = $_POST["przz6"];
    $rsk5 = $_POST["przz7"];
    $rsk_total = $_POST["przz8"];

    $total = $_POST["przz9"];

    require_once 'dbh.inc.php';
    
    $sql = "UPDATE scorecard SET orgname=?, dev1=?, dev2=?, dev3=?, dev4=?, dev5=?, devTotal=?,
                                            biz1=?, biz2=?, biz3=?, biztotal=?,
                                            gov1=?, gov2=?, govtotal=?,
                                            rsk1=?, rsk2=?, rsk3=?, rsk4=?, rsk5=?, rsktotal=?,
                                            total=?
            WHERE id =?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        if ($_SERVER['REQUEST_URI'] === "/FTA_Partners_System/includes/przzEDIT.inc.php") {
            echo '<meta http-equiv="Refresh" content="0.0; url=../php/listofass.php?error=goneBack2">';
            exit();
        }
    }

    mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssss", $przz_orgname, $dev1, $dev2, $dev3, $dev4, $dev5, $dev_total,
                                                                           $biz1, $biz2, $biz3, $biz_total,
                                                                           $gov1, $gov2, $gov_total,
                                                                           $rsk1, $rsk2, $rsk3, $rsk4, $rsk5, $rsk_total,
                                                                        $total,
                            $przz_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    if ($_SERVER['REQUEST_URI'] === "/FTA_Partners_System/includes/przzEDIT.inc.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listofass.php?error=successPRZZupdate">';
        exit();
    }

}else {
    if ($_SERVER['REQUEST_URI'] === "/FTA_Partners_System/includes/przzEDIT.inc.php") {
        echo '<meta http-equiv="Refresh" content="0.0; url=../php/listofass.php?error=goneBack1">';
        exit();
    }
}