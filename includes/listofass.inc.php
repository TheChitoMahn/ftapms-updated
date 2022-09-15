<?php

include "dbh.inc.php";

$sql = "SELECT * FROM scoresheet ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

$sql1 = "SELECT * FROM ddchecklist ORDER BY id DESC";
$result1 = mysqli_query($conn, $sql1);

$sql2 = "SELECT * FROM scorecard ORDER BY id DESC";
$result2 = mysqli_query($conn, $sql2);