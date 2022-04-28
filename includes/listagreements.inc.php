<?php

include "dbh.inc.php";

$sql = "SELECT * FROM alert ORDER BY id DESC";
$result4 = mysqli_query($conn, $sql);