<?php

include "dbh.inc.php";

$sql = "SELECT * FROM newpartner ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT * FROM actionplan";
$activity = mysqli_query($conn, $sql2);