<?php

include "dbh.inc.php";

$sql = "SELECT * FROM service ORDER BY id DESC";
$result = mysqli_query($conn, $sql);