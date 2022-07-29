<?php

include "dbh.inc.php";

$mousql = "SELECT * FROM mou";
$mouresult = mysqli_query($conn, $mousql);

$ndasql = "SELECT * FROM nda";
$ndaresult = mysqli_query($conn, $ndasql);

if(isset($_POST["s-mou-submit"])) {
    $data = file_get_contents($_FILES["signedMOU"]["tmp_name"]);
    $name = $_FILES["signedMOU"]["name"];
    $progress = "3";
    $id = $_POST["mouselect"];

    $sql1 = "UPDATE mou SET data=?, name=?, progress=? WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql1)) {
        header("location: ../php/upload.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $data, $name, $progress, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../php/upload.php?error=successupload");
    exit();
}

if (isset($_POST["mou-print"])) {
    $id2 = $_POST["id"];
    $p_progress = "2";

    $psql = "UPDATE mou SET progress='$p_progress' WHERE id = '$id2'";
    $query_run = mysqli_query($conn, $psql);

    if($query_run){
        header("location: ../includes/print_MOU_single.inc.php?id={$id2}");
        echo '<script> alert("Data Updated!") </script>';
    } else {
        header("location: ../includes/print_MOU_single.inc.php?id={$id2}");
        echo '<script> alert("Data not Updated!") </script>';
    }
}