<?php

if (isset($_GET['id'])) {

    include "dbh.inc.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);

    $sql = "SELECT * FROM mou WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else {
        header("Location: ../php/MOUedit.php?error=goneBack1");
    }

}else if (isset($_POST["btn-MOUedit"])) {
    require_once '../php/sidebar.php';

    $id = $_POST["id"];
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
    $RLname = $_SESSION["fullname"];
    $action = "updated an MOU Agreement at ";

    require_once 'dbh.inc.php';
    require_once 'UEfunctions.inc.php';

    updateMOU($conn, $orgname, $moudate, $preamble, $whereas, $whereas2, $article1, $article2, $article3, $article31, $article32, $article4, $article5, $article6, $article7, $article8, $contacts, $article9, $article10, $article11, $article12, $article13, $article14, $sign, $id, $RLname, $action);

}else {
    echo '<meta http-equiv="Location" content="5.01; url=../php/MOUEdit.php?id=$id&error=goneBack2">';
    // header("location: ../php/NDAEdit.php?error=goneBack2");
    exit();
}
