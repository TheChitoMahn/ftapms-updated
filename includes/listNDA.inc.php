<?php

include "dbh.inc.php";

$sql = "SELECT * FROM nda ORDER BY id DESC";
$result = mysqli_query($conn, $sql);