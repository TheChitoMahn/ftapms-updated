<?php

if (isset($_GET['id'])) {

    include "dbh.inc.php";

    // function validate($data){
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }

    $id = sanitize_input($_GET['id']);

    $sql = "SELECT * FROM nda WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else {
        header("Location: ../php/userEdit.php?error=goneBack1");
    }

}else if (isset($_POST["btn-NDAedit"])) {
    require_once '../php/sidebar.php';

    $id = $_POST["id"];
    $date = $_POST["date"];
    $name = $_POST["name"];
    $partner = $_POST["partner"];
    $proposal = $_POST["proposal"];
    $delivery = $_POST["delivery"];
    $termination = $_POST["termination"];
    $country = $_POST["country"];
    $time = $_POST["time"];
    $timelimit = $_POST["timelimit"];
    $goals = trim($_POST["goalsbiginput"]);
    $w_name = $_POST["witnessname"];
    $w_designation = $_POST["witnessdesignation"];
    $w_address = $_POST["witnessaddress"];
    $fta_name = $_POST["ftaname"];
    $RLname = $_SESSION["fullname"];
    $action = "updated an NDA Agreement at ";

    require_once 'dbh.inc.php';
    require_once 'UEfunctions.inc.php';

    updateNDA($conn, $date, $name, $partner, $proposal, $delivery, $termination, $country, $time, $timelimit, $goals, $w_name, $w_designation, $w_address, $fta_name, $id, $RLname, $action);

}else {
    echo '<meta http-equiv="Location" content="5.01; url=../php/NDAEdit.php?id=$id&error=goneBack2">';
    // header("location: ../php/NDAEdit.php?error=goneBack2");
    exit();
}