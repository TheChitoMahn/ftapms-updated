<?php

if(isset($_POST["mou-submit"])) {

    $logo = file_get_contents($_FILES["logo"]["tmp_name"]);
    $orgname = $_POST["orgname"];
    $moudate = $_POST["moudate"];
    $preamble = trim($_POST["preamble"]);
    $whereas = trim($_POST["whereas"]);
    $whereas2 = trim($_POST["whereas2"]);
    $article1 = trim($_POST["article1"]);
    $article2 = trim($_POST["article2"]);
    $article3 = trim($_POST["article3"]);
    $article31 = trim($_POST["article31"]);
    $article32 = trim($_POST["article32"]);
    $article4 = trim($_POST["article4"]);
    $article5 = trim($_POST["article5"]);
    $article6 = trim($_POST["article6"]);
    $article7 = trim($_POST["article7"]);
    $article8 = trim($_POST["article8"]);
    $contacts = trim($_POST["contacts"]);
    $article9 = trim($_POST["article9"]);
    $article10 = trim($_POST["article10"]);
    $article11 = trim($_POST["article11"]);
    $article12 = trim($_POST["article12"]);
    $article13 = trim($_POST["article13"]);
    $article14 = trim($_POST["article14"]);
    $sign = trim($_POST["sign"]);

    require_once 'dbh.inc.php';
    require_once 'nptfunctions.inc.php';

    createmou($conn, $logo, $orgname, $moudate, $preamble, $whereas, $whereas2, $article1, $article2, $article3, $article31, $article32, $article4, $article5, $article6, $article7, $article8, $contacts, $article9, $article10, $article11, $article12, $article13, $article14, $sign);

}else {
    header("location: ../php/MOU.php?error=posterror");
    exit();
}