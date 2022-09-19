<?php

if (isset($_POST["action"])) {
    if ($_POST["action"] == "insert") {
        insert();
    }else if ($_POST["action"] == "capacity") {
        capacity();
    }else if ($_POST["action"] == "risk") {
        risk();
    }else if ($_POST["action"] == "fnl") {
        fnl();
    }else if ($_POST["action"] == "devtotal") {
        devtotal();
    }else if ($_POST["action"] == "biztotal") {
        biztotal();
    }else if ($_POST["action"] == "govtotal") {
        govtotal();
    }else if ($_POST["action"] == "rsktotal") {
        rsktotal();
    }else if ($_POST["action"] == "avgtotal") {
        avgtotal();
    }else if ($_POST["action"] == "id") {
        id();
    }else if ($_POST["action"] == "nda_id") {
        nda_id();
    }
    else {
        echo "Invalid. No function found.";
    }
}
// MOU ID Checker
function id()
{
    include '../includes/dbh.inc.php';

    $id = $_POST["id"];

    $sql = "SELECT * FROM scoresheet WHERE UID = $id";
    $result = mysqli_query($conn, $sql);

    if (!mysqli_num_rows($result) > 0) {
        echo "Record not Found!";
    }else {
        echo "Record Found!";
    }
}

// NDA ID Checker
function nda_id()
{
    include '../includes/dbh.inc.php';

    $id = $_POST["id"];

    $sql = "SELECT * FROM scoresheet WHERE UID = $id";
    $result = mysqli_query($conn, $sql);

    if (!mysqli_num_rows($result) > 0) {
        echo "Record not Found!";
    }else {
        echo "Record Found!";
    }
}

function insert()
{
    // global $conn;

    $no_1 = $_POST["no_1"];
    $no_2 = $_POST["no_2"];
    $no_3 = $_POST["no_3"];
    $no_4 = $_POST["no_4"];
    $no_5 = $_POST["no_5"];
    $no_6 = $_POST["no_6"];
    $no_7 = $_POST["no_7"];
    $no_8 = $_POST["no_8"];
    $no_9 = $_POST["no_9"];
    $no_10 = $_POST["no_10"];

    $query = ($no_1 + $no_2 + $no_3 + $no_4 + $no_5 + $no_6 + $no_7 + $no_8 + $no_9 + $no_10) / 10;
    print($query);
    // echo "Inserted Successfully " .$query
}

function capacity()
{
    $no_1 = $_POST["no_1"];
    $no_2 = $_POST["no_2"];
    $no_3 = $_POST["no_3"];
    $no_4 = $_POST["no_4"];
    $no_5 = $_POST["no_5"];
    $no_6 = $_POST["no_6"];
    $no_7 = $_POST["no_7"];
    $no_8 = $_POST["no_8"];

    $ans = ($no_1 + $no_2 + $no_3 + $no_4 + $no_5 + $no_6 + $no_7 + $no_8) / 8;
    print($ans);
}

function risk()
{
    $no_1 = $_POST["no_1"];
    $no_2 = $_POST["no_2"];
    $no_3 = $_POST["no_3"];
    $no_4 = $_POST["no_4"];
    $no_5 = $_POST["no_5"];
    $no_6 = $_POST["no_6"];

    $ans = ($no_1 + $no_2 + $no_3 + $no_4 + $no_5 + $no_6) / 6;
    print($ans);
}

function fnl()
{
    $no_1 = $_POST["no_1"];
    $no_2 = $_POST["no_2"];
    $no_3 = $_POST["no_3"];

    $ans = $no_1 + $no_2 + $no_3;
    print($ans);
}

// Partnership Prioritization Tool -------------------------------------------------------------
function devtotal()
{
    $no_1 = $_POST["no_1"];
    $no_2 = $_POST["no_2"];
    $no_3 = $_POST["no_3"];
    $no_4 = $_POST["no_4"];
    $no_5 = $_POST["no_5"];

    $ans = $no_1 + $no_2 + $no_3 + $no_4 + $no_5;
    print($ans);
}
function biztotal()
{
    $no_1 = $_POST["no_1"];
    $no_2 = $_POST["no_2"];
    $no_3 = $_POST["no_3"];

    $ans = $no_1 + $no_2 + $no_3;
    print($ans);
}
function govtotal()
{
    $no_1 = $_POST["no_1"];
    $no_2 = $_POST["no_2"];

    $ans = $no_1 + $no_2;
    print($ans);
}
function rsktotal()
{
    $no_1 = $_POST["no_1"];
    $no_2 = $_POST["no_2"];
    $no_3 = $_POST["no_3"];
    $no_4 = $_POST["no_4"];
    $no_5 = $_POST["no_5"];

    $ans = $no_1 + $no_2 + $no_3 + $no_4 + $no_5;
    print($ans);
}
function avgtotal()
{
    $no_1 = $_POST["no_1"];
    $no_2 = $_POST["no_2"];
    $no_3 = $_POST["no_3"];
    $no_4 = $_POST["no_4"];

    $ans = ($no_1 + $no_2 + $no_3 + $no_4) / 4;
    print($ans);
}
?>