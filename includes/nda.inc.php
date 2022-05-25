<?php

if(isset($_POST["nda-submit"])) {

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

    require_once 'dbh.inc.php';
    require_once 'nptfunctions.inc.php';

    createnda($conn, $date, $name, $partner, $proposal, $delivery, $termination, $country, $time, $timelimit, $goals, $w_name, $w_designation, $w_address, $fta_name);

}else {
    header("location: ../php/NDA.php?error=posterror");
    exit();
}